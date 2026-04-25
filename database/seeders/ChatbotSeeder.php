<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChatbotKnowledge;

class ChatbotSeeder extends Seeder
{
    public function run()
    {
        ChatbotKnowledge::truncate();

        $data = [
            // ================= TOPIK 1: AKUN & LOGIN =================
            [
                'topic' => 'Akun & Login',
                'intent_name' => 'cara_login',
                'keywords' => ['login', 'masuk', 'sign in', 'akses lms', 'masuk kelas', 'akun saya'],
                'response' => 'Untuk mengakses materi, silakan klik tombol "Login" di pojok kanan atas. Gunakan email dan password yang terdaftar di FutureCloud Space ya!'
            ],
            [
                'topic' => 'Akun & Login',
                'intent_name' => 'registrasi',
                'keywords' => ['daftar', 'register', 'buat akun', 'bikin akun', 'gabung', 'siswa baru', 'pendaftaran'],
                'response' => 'Belum punya akun? Klik "Daftar Sekarang". Isi data diri Anda, pilih role sebagai Siswa, dan verifikasi email Anda untuk mulai belajar.'
            ],
            [
                'topic' => 'Akun & Login',
                'intent_name' => 'lupa_password',
                'keywords' => ['lupa password', 'reset sandi', 'ganti password', 'tidak bisa masuk', 'salah password', 'lupa'],
                'response' => 'Jangan khawatir! Klik "Lupa Password" di halaman login. Kami akan mengirimkan instruksi pengaturan ulang kata sandi ke email Anda.'
            ],

            // ================= TOPIK 2: KURSUS & MATERI =================
            [
                'topic' => 'Kursus & Materi',
                'intent_name' => 'cara_belajar',
                'keywords' => ['mulai belajar', 'lihat materi', 'buka kelas', 'akses video', 'modul', 'kurikulum', 'pelajaran'],
                'response' => 'Setelah login, buka menu "Kursus Saya". Pilih kursus yang Anda ikuti, lalu klik "Mulai Belajar" untuk mengakses video, modul teks, dan kuis.'
            ],
            [
                'topic' => 'Kursus & Materi',
                'intent_name' => 'sertifikat',
                'keywords' => ['sertifikat', 'lulus', 'e-certificate', 'klaim sertifikat', 'selesai kursus', 'piagam'],
                'response' => 'Sertifikat akan otomatis muncul di menu "Sertifikat" jika Anda telah menyelesaikan 100% materi dan lulus ujian akhir kursus.'
            ],
            
            // ================= TOPIK 4: KENDALA TEKNIS =================
            [
                'topic' => 'Kendala Teknis',
                'intent_name' => 'video_macet',
                'keywords' => ['video macet', 'buffer', 'tidak muncul', 'error video', 'loading lama', 'suara hilang'],
                'response' => 'Pastikan koneksi internet stabil. Jika video masih macet, coba turunkan kualitas video ke 360p atau hapus cache browser Anda.'
            ],
            [
                'topic' => 'Kendala Teknis',
                'intent_name' => 'kuis_bermasalah',
                'keywords' => ['kuis error', 'tidak bisa submit', 'ujian macet', 'soal tidak muncul', 'gagal kuis'],
                'response' => 'Jika terjadi kendala saat ujian, pastikan Anda tidak membuka banyak tab browser. Coba refresh halaman dan pastikan waktu pengerjaan belum habis.'
            ],

            // ================= TOPIK UMUM (GLOBAL) =================
            [
                'topic' => 'Umum',
                'intent_name' => 'sapaan',
                'keywords' => ['halo', 'hai', 'pagi', 'siang', 'sore', 'malam', 'admin', 'halo admin'],
                'response' => 'Halo! Selamat datang di FutureCloud Space. Saya asisten virtual Anda. Ada yang bisa saya bantu terkait kursus Anda hari ini?'
            ],
            [
                'topic' => 'Umum',
                'intent_name' => 'terima_kasih',
                'keywords' => ['terimakasih', 'makasih', 'thanks', 'oke', 'paham', 'baik min'],
                'response' => 'Sama-sama! Semangat belajarnya ya. Jika butuh bantuan lebih lanjut, silakan hubungi tim Support melalui menu "Hubungi Kami".'
            ]
        ];

        foreach ($data as $item) {
            ChatbotKnowledge::create([
                'topic' => $item['topic'],
                'intent_name' => $item['intent_name'],
                'keywords' => json_encode($item['keywords']),
                'response' => $item['response']
            ]);
        }
    }
}