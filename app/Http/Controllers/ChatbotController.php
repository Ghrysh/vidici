<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatbotKnowledge;
use App\Models\ChatbotLead;

class ChatbotController extends Controller
{
    // Ganti nama fungsi menjadi 'send' agar sesuai dengan Route /api/chatbot/send
    public function send(Request $request)
    {
        $topic = $request->topic ?? 'Umum'; 
        $message = strtolower(trim($request->message));
        
        $slangDict = [
            'gmn' => 'bagaimana', 'gimana' => 'bagaimana', 'bgmn' => 'bagaimana',
            'brp' => 'berapa', 'klo' => 'kalau', 'kalo' => 'kalau',
            'bikin' => 'buat', 'bs' => 'bisa', 'gk' => 'tidak', 'ga' => 'tidak',
            'tdk' => 'tidak', 'dgn' => 'dengan', 'yg' => 'yang', 'utk' => 'untuk',
            'makasih' => 'terimakasih', 'trims' => 'terimakasih', 'thx' => 'terimakasih',
            'pw' => 'password', 'pass' => 'password', 'loginnya' => 'login'
        ];

        $cleanMessage = preg_replace('/[^\w\s]/', '', $message);
        $words = explode(' ', $cleanMessage);
        foreach($words as &$w) {
            if(isset($slangDict[$w])) $w = $slangDict[$w];
        }
        $cleanMessage = implode(' ', $words);

        $realIp = $request->ip();
        
        $lead = null;
        if ($request->lead_id) {
            $lead = ChatbotLead::find($request->lead_id);
        }

        // LOGIKA AUTO CLOSE (Nama kolom disesuaikan dengan Migration: contact, history)
        if ($request->is_autoclose) {
            if ($lead) {
                $contactInfo = auth()->check() ? auth()->user()->email : 'Diakhiri Otomatis (Guest)';
                $lead->update([
                    'contact' => $contactInfo,
                    'history' => json_encode($request->chat_history)
                ]);
            }
            return response()->json(['success' => true]);
        }

        // PEMBUATAN / UPDATE LEAD (Nama kolom disesuaikan: topic, contact, history, message)
        if (!$lead) {
            $lead = ChatbotLead::create([
                'user_id' => auth()->id(),
                'ip_address' => $realIp, 
                'topic' => $topic, // Sesuai DB
                'contact' => '-', // Sesuai DB
                'history' => json_encode($request->chat_history), // Sesuai DB
                'message' => $message, // Sesuai DB
                'status' => 'open'
            ]);
        } else {
            $lead->update([
                'history' => json_encode($request->chat_history),
                'message' => $message
            ]);
        }

        // LOGIKA FOLLOW UP (Simpan kontak ke kolom 'contact')
        if ($request->is_followup) {
            $lead->update(['contact' => $message]);
            return response()->json([
                'reply' => 'Terima kasih! Tim konsultan VIDICI akan segera menindaklanjuti kendala Anda melalui kontak tersebut. Sesi chat ini Mimin tutup ya! 👋',
                'is_finished' => true,
                'lead_id' => $lead->id
            ]);
        }

        // PENCARIAN JAWABAN
        $knowledges = ChatbotKnowledge::whereIn('topic', [$topic, 'Umum'])->get();
        $bestMatch = null;
        $highestScore = 0;

        foreach ($knowledges as $k) {
            $keywords = json_decode($k->keywords, true);
            if (!is_array($keywords)) continue;

            $score = 0;
            foreach ($keywords as $kw) {
                $kw = strtolower(trim($kw));
                if (str_contains($cleanMessage, $kw)) {
                    $score += strlen($kw) * 2; 
                }
            }

            if ($score > $highestScore) {
                $highestScore = $score;
                $bestMatch = $k;
            }
        }

        $reply = $highestScore > 0 
            ? $bestMatch->response 
            : "Maaf, Mimin belum menemukan jawaban yang tepat untuk pertanyaan Anda mengenai <b>".$topic."</b>. Bisa coba jelaskan dengan kata kunci lain?";

        return response()->json([
            'reply' => $reply,
            'lead_id' => $lead->id
        ]);
    }


    /**
     * Tampilkan Halaman Utama (Tab Knowledge & Leads)
     */
    public function index()
    {
        $knowledges = ChatbotKnowledge::latest()->get();
        $leads = ChatbotLead::with('user')->latest()->get();

        return view('admin.chatbot.index', compact('knowledges', 'leads'));
    }

    /**
     * Simpan Knowledge Baru
     */
    public function storeKnowledge(Request $request)
    {
        $validated = $request->validate([
            'topic' => 'required|string|max:255',
            'intent_name' => 'required|string|unique:chatbot_knowledges,intent_name',
            'keywords' => 'required|string',
            'response' => 'required|string',
        ]);

        ChatbotKnowledge::create($validated);

        return back()->with('success', 'Data pengetahuan berhasil ditambahkan!');
    }

    /**
     * Update Knowledge
     */
    public function updateKnowledge(Request $request, $id)
    {
        $knowledge = ChatbotKnowledge::findOrFail($id);

        $validated = $request->validate([
            'topic' => 'required|string|max:255',
            'intent_name' => 'required|string|unique:chatbot_knowledges,intent_name,' . $id,
            'keywords' => 'required|string',
            'response' => 'required|string',
        ]);

        $knowledge->update($validated);

        return back()->with('success', 'Data pengetahuan berhasil diperbarui!');
    }

    /**
     * Hapus Knowledge
     */
    public function destroyKnowledge($id)
    {
        ChatbotKnowledge::findOrFail($id)->delete();
        return back()->with('success', 'Data pengetahuan berhasil dihapus.');
    }

    /**
     * Hapus Lead
     */
    public function destroyLead($id)
    {
        ChatbotLead::findOrFail($id)->delete();
        return back()->with('success', 'Data lead berhasil dihapus.');
    }
}
