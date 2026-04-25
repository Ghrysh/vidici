<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        $user = Auth::user();

        // Pengecekan Email Verified (Kecuali untuk admin)
        if ($user->email !== 'admin@vidici.com' && is_null($user->email_verified_at)) {
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login')->with('error', 'Akun Anda belum diverifikasi. Silakan cek email Anda.');
        }

        $roles = $user->roles->pluck('slug');
        session()->flash('success', 'Selamat Datang, ' . $user->name);

        // KUNCI PERBAIKAN: Gunakan redirect() paksa, BUKAN redirect()->intended()
        // 1. Jika dia Admin -> Langsung ke halaman Admin
        if ($roles->contains('admin')) {
            return redirect('/admin/visitors');
        } 

        // 2. Jika dia User Biasa -> Langsung ke Landing Page
        if ($roles->contains('user')) {
            return redirect('/');
        }

        // 3. FALLBACK: Jika akun tidak punya role sama sekali -> Paksa ke Landing Page (Bukan ke Login/Dashboard)
        return redirect('/');
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}