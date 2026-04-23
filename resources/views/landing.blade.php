<x-app-layout>
    <style>
        html { scroll-behavior: smooth; }
        .bg-glow-cyan {
            background: radial-gradient(circle at center, rgba(6, 182, 212, 0.1) 0%, transparent 70%);
        }
        .bg-glow-fuchsia {
            background: radial-gradient(circle at center, rgba(217, 70, 239, 0.1) 0%, transparent 70%);
        }
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #09090b; }
        ::-webkit-scrollbar-thumb { background: #3f3f46; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #52525b; }
    </style>

    <div class="min-h-screen bg-zinc-950 text-white font-sans selection:bg-cyan-500/30">
        
        <nav class="fixed w-full z-50 top-0 border-b border-white/5 bg-zinc-950/80 backdrop-blur-md">
            <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('logo_vidici.png') }}" alt="VIDICI Logo" class="h-8 w-auto object-contain">
                    
                    <div class="flex flex-col">
                        <span class="font-bold text-base leading-none tracking-tight">Vidya Diginara Cipta</span>
                        <span class="text-[9px] text-zinc-500 uppercase tracking-tighter leading-none mt-1">Innovate, Collaborate, Grow Together</span>
                    </div>
                </div>
                <div class="hidden lg:flex gap-6 text-[10px] font-bold text-zinc-400 uppercase tracking-widest">
                    <a href="#home" class="hover:text-cyan-400 transition">Beranda</a>
                    <a href="#about" class="hover:text-cyan-400 transition">Tentang</a>
                    <a href="#services" class="hover:text-cyan-400 transition">Solusi</a>
                    <a href="#why-us" class="hover:text-cyan-400 transition">Keunggulan</a>
                    <a href="#portfolio" class="hover:text-cyan-400 transition">Portofolio</a>
                    <a href="#career" class="hover:text-cyan-400 transition">Karier</a>
                    <a href="#insights" class="hover:text-cyan-400 transition">Berita</a>
                </div>
                <div class="hidden lg:flex items-center">
                    <a href="#contact" class="px-5 py-2 bg-gradient-to-r from-cyan-500 to-fuchsia-600 text-white font-bold rounded-full hover:opacity-90 transition text-xs shadow-lg shadow-fuchsia-500/20">HUBUNGI KAMI</a>
                </div>
            </div>
        </nav>

        <section id="home" class="relative w-full pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden flex items-center bg-zinc-950">
            <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-500/10 blur-[120px] rounded-full pointer-events-none"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-fuchsia-500/10 blur-[120px] rounded-full pointer-events-none"></div>
            
            <div class="max-w-7xl mx-auto px-6 w-full relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-12 mb-20">
                    <div class="flex-1">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 text-[10px] font-bold uppercase tracking-widest text-cyan-400 mb-6 backdrop-blur-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 animate-pulse"></span>
                            Strategic IT Partner
                        </div>
                        <h1 class="text-5xl md:text-8xl font-extrabold tracking-tighter mb-6 leading-[0.95]">
                            AKSELERASI <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-fuchsia-500">TRANSFORMASI DIGITAL</span>
                        </h1>
                        <p class="text-lg text-zinc-400 max-w-xl mb-10 leading-relaxed font-light">
                            Solusi infrastruktur IT dan pengembangan aplikasi kustom berstandar enterprise dengan efisiensi biaya hingga 40%.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#services" class="px-8 py-3 bg-white text-black font-bold rounded-full hover:bg-zinc-200 transition text-sm">PELAJARI SOLUSI</a>
                            <a href="#contact" class="px-8 py-3 bg-zinc-900/50 backdrop-blur border border-white/10 text-white font-bold rounded-full hover:bg-zinc-800 transition text-sm">KONSULTASI GRATIS →</a>
                        </div>
                    </div>
                    <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="p-6 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-2xl shadow-lg hover:border-cyan-500/30 transition">
                            <div class="text-cyan-400 font-bold text-xs uppercase mb-2 tracking-widest">Managed Services</div>
                            <div class="text-zinc-400 text-sm">Operasional IT 24/7 yang stabil dan terukur.</div>
                        </div>
                        <div class="p-6 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-2xl shadow-lg hover:border-fuchsia-500/30 transition">
                            <div class="text-fuchsia-400 font-bold text-xs uppercase mb-2 tracking-widest">Custom Apps</div>
                            <div class="text-zinc-400 text-sm">Web & Mobile apps yang dirancang khusus.</div>
                        </div>
                        <div class="p-6 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-2xl shadow-lg hover:border-cyan-500/30 transition">
                            <div class="text-cyan-400 font-bold text-xs uppercase mb-2 tracking-widest">ERP Solutions</div>
                            <div class="text-zinc-400 text-sm">Sistem manajemen internal terintegrasi.</div>
                        </div>
                        <div class="p-6 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-2xl shadow-lg hover:border-fuchsia-500/30 transition">
                            <div class="text-fuchsia-400 font-bold text-xs uppercase mb-2 tracking-widest">Banking Systems</div>
                            <div class="text-zinc-400 text-sm">Core banking & Digital payment secure.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="py-24 border-t border-white/5 bg-zinc-950 relative">
            <div class="max-w-7xl mx-auto px-6">
                <div class="mb-20">
                    <h4 class="text-xs font-bold text-cyan-500 uppercase tracking-[0.4em] mb-4">Tentang Kami</h4>
                    <h2 class="text-4xl md:text-6xl font-bold tracking-tighter uppercase mb-8">Filosofi ViDiCi</h2>
                    <div class="grid md:grid-cols-2 gap-12">
                        <p class="text-zinc-400 leading-relaxed text-lg font-light">
                            Berdiri dengan visi menjadi jembatan antara kebutuhan industri dan potensi talenta lokal. VIDICI beroperasi secara strategis dari Yogyakarta, Malang, dan Jakarta untuk menghadirkan kualitas pengembangan kelas dunia dengan biaya operasional yang kompetitif.
                        </p>
                        <div class="space-y-4">
                            <div class="flex gap-6">
                                <div class="text-2xl font-bold text-fuchsia-500">VISI</div>
                                <div class="text-sm text-zinc-400 italic font-light leading-relaxed">"Menjadi katalisator transformasi digital global melalui kolaborasi talenta terbaik dan teknologi responsif."</div>
                            </div>
                            <div class="flex gap-6">
                                <div class="text-2xl font-bold text-cyan-500">MISI</div>
                                <div class="text-sm text-zinc-400 font-light leading-relaxed">Memberikan kepastian operasional IT melalui model kemitraan jangka panjang dan transparansi proses pengembangan.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-6">
                    <div class="p-8 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-3xl shadow-lg">
                        <h3 class="text-sm font-bold text-cyan-400 uppercase tracking-widest mb-6 italic">Nilai Perusahaan</h3>
                        <ul class="text-xs text-zinc-400 space-y-4 font-medium uppercase tracking-tighter">
                            <li>• Efisiensi Tanpa Kompromi</li>
                            <li>• Shared-Risk Partnership</li>
                            <li>• Responsif & Adaptif</li>
                            <li>• Pemberdayaan Talenta Yogyakarta</li>
                        </ul>
                    </div>
                    <div class="p-8 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-3xl shadow-lg col-span-2">
                        <h3 class="text-sm font-bold text-fuchsia-400 uppercase tracking-widest mb-6 italic">Tim & Pendiri</h3>
                        <p class="text-zinc-400 text-sm leading-relaxed mb-6 font-light">Didukung oleh jajaran manajemen dengan pengalaman lebih dari 20 tahun di sektor BUMN dan Perbankan Nasional, mengawasi langsung kualitas arsitektur setiap proyek.</p>
                        
                        <div class="flex gap-4">
                            <div class="group relative w-12 h-12 rounded-full border border-white/10 overflow-hidden shadow-lg hover:scale-110 transition duration-300 cursor-pointer">
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=150&h=150&fit=crop" alt="CEO" class="w-full h-full object-cover">
                            </div>
                            <div class="group relative w-12 h-12 rounded-full border border-white/10 overflow-hidden shadow-lg hover:scale-110 transition duration-300 cursor-pointer">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=150&h=150&fit=crop" alt="CTO" class="w-full h-full object-cover">
                            </div>
                            <div class="group relative w-12 h-12 rounded-full border border-white/10 overflow-hidden shadow-lg hover:scale-110 transition duration-300 cursor-pointer">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop" alt="COO" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="py-32 bg-glow-cyan relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-24">
                    <h4 class="text-xs font-bold text-cyan-500 uppercase tracking-[0.4em] mb-4">Layanan Kami</h4>
                    <h2 class="text-4xl md:text-7xl font-extrabold tracking-tighter uppercase leading-none">High-Performance <br><span class="text-zinc-500">Solutions</span></h2>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="group p-10 bg-zinc-900/30 border border-white/10 backdrop-blur-2xl rounded-[2.5rem] hover:border-cyan-500/50 transition duration-500 shadow-2xl relative overflow-hidden">
                        <div class="absolute -right-10 -top-10 w-40 h-40 bg-cyan-500/10 blur-3xl group-hover:bg-cyan-500/20 transition"></div>
                        <h3 class="text-2xl font-bold mb-6 uppercase italic text-cyan-400">Managed Ops / GSOC</h3>
                        <div class="grid grid-cols-2 gap-6 text-sm text-zinc-400 font-light uppercase tracking-tighter">
                            <ul class="space-y-3">
                                <li>Monitoring 24/7</li>
                                <li>Incident Mgmt</li>
                            </ul>
                            <ul class="space-y-3">
                                <li>Problem Mgmt</li>
                                <li>L1–L3 Support</li>
                            </ul>
                        </div>
                    </div>
                    <div class="group p-10 bg-zinc-900/30 border border-white/10 backdrop-blur-2xl rounded-[2.5rem] hover:border-fuchsia-500/50 transition duration-500 shadow-2xl relative overflow-hidden">
                        <div class="absolute -right-10 -top-10 w-40 h-40 bg-fuchsia-500/10 blur-3xl group-hover:bg-fuchsia-500/20 transition"></div>
                        <h3 class="text-2xl font-bold mb-6 uppercase italic text-fuchsia-400">Custom Development</h3>
                        <div class="grid grid-cols-2 gap-6 text-sm text-zinc-400 font-light uppercase tracking-tighter">
                            <ul class="space-y-3">
                                <li>Web Applications</li>
                                <li>Mobile Apps</li>
                            </ul>
                            <ul class="space-y-3">
                                <li>API Integration</li>
                                <li>Cloud-Native</li>
                            </ul>
                        </div>
                    </div>
                    <div class="group p-10 bg-zinc-900/30 border border-white/10 backdrop-blur-2xl rounded-[2.5rem] hover:border-cyan-500/50 transition duration-500 shadow-2xl relative overflow-hidden">
                        <div class="absolute -right-10 -top-10 w-40 h-40 bg-cyan-500/10 blur-3xl group-hover:bg-cyan-500/20 transition"></div>
                        <h3 class="text-2xl font-bold mb-6 uppercase italic text-cyan-400">ERP Solutions</h3>
                        <div class="grid grid-cols-2 gap-6 text-sm text-zinc-400 font-light uppercase tracking-tighter">
                            <ul class="space-y-3">
                                <li>Finance & Procure</li>
                                <li>Inventory & Asset</li>
                            </ul>
                            <ul class="space-y-3">
                                <li>HRIS & Payroll</li>
                                <li>Custom Reporting</li>
                            </ul>
                        </div>
                    </div>
                    <div class="group p-10 bg-zinc-900/30 border border-white/10 backdrop-blur-2xl rounded-[2.5rem] hover:border-fuchsia-500/50 transition duration-500 shadow-2xl relative overflow-hidden">
                        <div class="absolute -right-10 -top-10 w-40 h-40 bg-fuchsia-500/10 blur-3xl group-hover:bg-fuchsia-500/20 transition"></div>
                        <h3 class="text-2xl font-bold mb-6 uppercase italic text-fuchsia-400">Banking Solutions</h3>
                        <div class="grid grid-cols-2 gap-6 text-sm text-zinc-400 font-light uppercase tracking-tighter">
                            <ul class="space-y-3">
                                <li>Core Banking</li>
                                <li>Payment Gateway</li>
                            </ul>
                            <ul class="space-y-3">
                                <li>Digital Banking</li>
                                <li>Mobile Payment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="why-us" class="py-24 border-t border-white/5 bg-zinc-950 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-20 items-center">
                    <div>
                        <h4 class="text-xs font-bold text-fuchsia-500 uppercase tracking-[0.4em] mb-4">Kenapa ViDiCi?</h4>
                        <h2 class="text-5xl md:text-7xl font-black tracking-tighter uppercase mb-8 leading-none">Keunggulan <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-fuchsia-500">Kompetitif</span></h2>
                        <p class="text-zinc-400 leading-relaxed text-lg font-light mb-10">
                            Kami menggabungkan standar kepatuhan industri keuangan dengan fleksibilitas metodologi Agile.
                        </p>
                        <div class="p-6 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-2xl shadow-xl flex items-center gap-6 hover:bg-zinc-900/50 transition">
                            <div class="text-5xl font-black text-cyan-400 tracking-tighter">100+</div>
                            <div class="text-xs text-zinc-500 uppercase font-bold tracking-widest">Proyek Enterprise <br>Berhasil Diantarkan</div>
                        </div>
                    </div>
                    
                    <div class="grid gap-4">
                        <div class="p-6 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-2xl hover:bg-zinc-900/50 transition group">
                            <h4 class="text-cyan-400 font-bold text-sm uppercase mb-2 group-hover:translate-x-2 transition-transform tracking-widest italic">01. Efisiensi Biaya</h4>
                            <p class="text-xs text-zinc-500 leading-relaxed">Penghematan anggaran pengembangan hingga 40% melalui model operasional hybrid.</p>
                        </div>
                        <div class="p-6 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-2xl hover:bg-zinc-900/50 transition group">
                            <h4 class="text-fuchsia-400 font-bold text-sm uppercase mb-2 group-hover:translate-x-2 transition-transform tracking-widest italic">02. Shared Risk Model</h4>
                            <p class="text-xs text-zinc-500 leading-relaxed">Komitmen penuh pada hasil akhir dengan skema kemitraan yang transparan.</p>
                        </div>
                        <div class="p-6 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-2xl hover:bg-zinc-900/50 transition group">
                            <h4 class="text-cyan-400 font-bold text-sm uppercase mb-2 group-hover:translate-x-2 transition-transform tracking-widest italic">03. Talenta Yogyakarta</h4>
                            <p class="text-xs text-zinc-500 leading-relaxed">Engineers berkualitas dari hub pendidikan teknologi terbaik di Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="py-24 bg-glow-fuchsia">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h4 class="text-xs font-bold text-cyan-500 uppercase tracking-[0.4em] mb-4">Portofolio</h4>
                    <h2 class="text-4xl md:text-6xl font-bold tracking-tighter uppercase">Jejak Transformasi</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-20">
                    <div class="p-10 border border-white/10 bg-zinc-900/30 backdrop-blur-xl rounded-[2.5rem] text-center shadow-xl hover:scale-[1.02] transition">
                        <div class="text-xs font-bold text-cyan-500 uppercase tracking-widest mb-4 italic">Sektor</div>
                        <h3 class="text-2xl font-bold mb-4 uppercase tracking-tighter">BUMN & Telco</h3>
                        <p class="text-sm text-zinc-500 leading-relaxed font-light italic">"Memberikan stabilitas infrastruktur skala nasional dengan standar keamanan tertinggi."</p>
                    </div>
                    <div class="p-10 border border-white/10 bg-zinc-900/30 backdrop-blur-xl rounded-[2.5rem] text-center shadow-xl hover:scale-[1.02] transition">
                        <div class="text-xs font-bold text-fuchsia-500 uppercase tracking-widest mb-4 italic">Sektor</div>
                        <h3 class="text-2xl font-bold mb-4 uppercase tracking-tighter">Perbankan</h3>
                        <p class="text-sm text-zinc-500 leading-relaxed font-light italic">"Implementasi sistem pembayaran yang aman dan patuh pada regulasi BI & OJK."</p>
                    </div>
                    <div class="p-10 border border-white/10 bg-zinc-900/30 backdrop-blur-xl rounded-[2.5rem] text-center shadow-xl hover:scale-[1.02] transition">
                        <div class="text-xs font-bold text-cyan-500 uppercase tracking-widest mb-4 italic">Sektor</div>
                        <h3 class="text-2xl font-bold mb-4 uppercase tracking-tighter">SME & UMKM</h3>
                        <p class="text-sm text-zinc-500 leading-relaxed font-light italic">"Digitalisasi operasional yang meningkatkan produktivitas secara signifikan."</p>
                    </div>
                </div>

                <div class="max-w-4xl mx-auto p-12 bg-zinc-900/30 border border-white/10 backdrop-blur-2xl rounded-3xl relative shadow-2xl border-l-4 border-l-cyan-500">
                    <p class="text-xl font-light text-zinc-300 leading-relaxed italic mb-8">
                        "ViDiCi berhasil mentransformasi sistem pelaporan operasional kami menjadi lebih transparan dan efisien. Tim mereka sangat responsif dan memahami kompleksitas bisnis kami."
                    </p>
                    <div>
                        <h4 class="font-bold text-white uppercase tracking-widest">VP of IT Operations</h4>
                        <p class="text-[10px] text-cyan-500 font-bold uppercase tracking-widest">Perusahaan Telekomunikasi Terkemuka</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="career" class="py-24 border-t border-white/5 bg-zinc-950">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col lg:flex-row justify-between items-end gap-10 mb-20">
                    <div class="max-w-xl">
                        <h4 class="text-xs font-bold text-fuchsia-500 uppercase tracking-[0.4em] mb-4">Karier</h4>
                        <h2 class="text-4xl md:text-6xl font-bold tracking-tighter uppercase">Build Your <br><span class="text-zinc-500">Legacy</span></h2>
                    </div>
                    <p class="text-zinc-400 font-light lg:text-right max-w-sm">Jadilah bagian dari tim yang membangun arsitektur IT masa depan Indonesia.</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <a href="#" class="group block p-8 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-3xl hover:border-cyan-500 transition shadow-xl">
                        <h3 class="text-xl font-bold mb-2 uppercase group-hover:text-cyan-400 transition italic">Lowongan Kerja</h3>
                        <p class="text-sm text-zinc-500 leading-relaxed font-light">Eksplorasi posisi Full-stack, Devops, atau Project Manager.</p>
                    </a>
                    <a href="#" class="group block p-8 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-3xl hover:border-fuchsia-500 transition shadow-xl">
                        <h3 class="text-xl font-bold mb-2 uppercase group-hover:text-fuchsia-400 transition italic">Internship</h3>
                        <p class="text-sm text-zinc-500 leading-relaxed font-light">Program magang intensif untuk mahasiswa tingkat akhir.</p>
                    </a>
                    <div class="p-8 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-3xl shadow-xl">
                        <h3 class="text-xl font-bold mb-2 uppercase italic text-zinc-300">Culture</h3>
                        <p class="text-sm text-zinc-500 leading-relaxed font-light uppercase tracking-tighter">Agile, Transparan, Remote-Friendly, Innovative.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="insights" class="py-24 border-t border-white/5 relative">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex justify-between items-end mb-16">
                    <div>
                        <h4 class="text-xs font-bold text-cyan-500 uppercase tracking-[0.4em] mb-4">Insights</h4>
                        <h2 class="text-4xl md:text-5xl font-bold tracking-tighter uppercase">ViDiCi Newsroom</h2>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <article class="group cursor-pointer">
                        <div class="w-full h-56 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-3xl mb-6 overflow-hidden shadow-lg relative">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop" alt="Core Banking" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/20 to-transparent opacity-80"></div>
                        </div>
                        <div class="text-[10px] text-cyan-500 font-bold uppercase tracking-widest mb-3 italic">Technology</div>
                        <h3 class="text-lg font-bold mb-3 group-hover:text-cyan-400 transition leading-tight uppercase tracking-tighter">Modernisasi Core Banking dengan Microservices</h3>
                        <p class="text-sm text-zinc-500 line-clamp-2 font-light">Strategi migrasi sistem lama menuju arsitektur cloud yang scalable.</p>
                    </article>
                    <article class="group cursor-pointer">
                        <div class="w-full h-56 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-3xl mb-6 overflow-hidden shadow-lg relative">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop" alt="Sistem ERP" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/20 to-transparent opacity-80"></div>
                        </div>
                        <div class="text-[10px] text-fuchsia-500 font-bold uppercase tracking-widest mb-3 italic">Update Proyek</div>
                        <h3 class="text-lg font-bold mb-3 group-hover:text-fuchsia-400 transition leading-tight uppercase tracking-tighter">Sistem ERP Terintegrasi untuk Manufaktur BUMN</h3>
                        <p class="text-sm text-zinc-500 line-clamp-2 font-light">Meningkatkan transparansi supply chain melalui satu platform terpadu.</p>
                    </article>
                    <article class="group cursor-pointer">
                        <div class="w-full h-56 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-3xl mb-6 overflow-hidden shadow-lg relative">
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&h=400&fit=crop" alt="Seminar Tech" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/20 to-transparent opacity-80"></div>
                        </div>
                        <div class="text-[10px] text-cyan-500 font-bold uppercase tracking-widest mb-3 italic">Seminar</div>
                        <h3 class="text-lg font-bold mb-3 group-hover:text-cyan-400 transition leading-tight uppercase tracking-tighter">Jogja Tech Summit 2026: Masa Depan IT Indonesia</h3>
                        <p class="text-sm text-zinc-500 line-clamp-2 font-light">Delegasi VIDICI berbagi pengalaman tentang manajemen operasional IT global.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="contact" class="py-24 border-t border-white/5 relative bg-zinc-950">
            <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20 relative z-10">
                <div>
                    <h4 class="text-xs font-bold text-fuchsia-500 uppercase tracking-[0.4em] mb-4">Kontak</h4>
                    <h2 class="text-4xl md:text-7xl font-black tracking-tighter uppercase mb-8 leading-none">Mulai <br>Diskusi.</h2>
                    <p class="text-zinc-400 leading-relaxed text-lg font-light mb-12">
                        Punya tantangan IT yang ingin diselesaikan? Hubungi kami untuk konsultasi awal tanpa komitmen.
                    </p>
                    
                    <div class="space-y-8">
                        <div class="flex items-start gap-6">
                            <div class="w-12 h-12 rounded-2xl bg-zinc-900/30 border border-white/10 backdrop-blur-xl flex items-center justify-center shrink-0 shadow-lg">
                                <svg class="w-5 h-5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-zinc-500 uppercase tracking-widest mb-1">Email</h4>
                                <a href="mailto:info@vidici.id" class="text-lg text-white hover:text-cyan-400 transition font-bold">info@vidici.id</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-6">
                            <div class="w-12 h-12 rounded-2xl bg-zinc-900/30 border border-white/10 backdrop-blur-xl flex items-center justify-center shrink-0 shadow-lg">
                                <svg class="w-5 h-5 text-fuchsia-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-zinc-500 uppercase tracking-widest mb-1">Telepon</h4>
                                <p class="text-lg text-white font-bold">+62 811-1170-196</p>
                            </div>
                        </div>
                        <div class="p-6 bg-zinc-900/30 border border-white/10 backdrop-blur-xl rounded-3xl shadow-lg">
                            <h4 class="text-[10px] font-bold text-zinc-500 uppercase tracking-widest mb-4 italic">Alamat Kantor Utama</h4>
                            <div class="grid grid-cols-2 gap-6 text-xs text-zinc-400 font-light">
                                <div><strong class="text-white block mb-1">Jogjakarta</strong> GSOC & Development Center</div>
                                <div><strong class="text-white block mb-1">Jakarta</strong> Managed Operations Hub</div>
                            </div>
                            <div class="w-full h-24 bg-zinc-900/50 rounded-xl mt-4 border border-white/5 flex items-center justify-center text-zinc-600 text-[10px] italic">
                                [ Peta Google Maps ]
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-zinc-900/30 border border-white/10 backdrop-blur-2xl p-10 rounded-[2.5rem] shadow-2xl relative">
                    <div class="absolute inset-x-0 -top-px h-px bg-gradient-to-r from-transparent via-cyan-500 to-transparent"></div>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-[10px] font-bold text-zinc-500 uppercase tracking-widest mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full bg-zinc-950/50 border border-white/10 text-white rounded-2xl p-4 outline-none focus:border-cyan-500 transition" placeholder="Nama Anda">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-zinc-500 uppercase tracking-widest mb-2">Email Perusahaan</label>
                            <input type="email" class="w-full bg-zinc-950/50 border border-white/10 text-white rounded-2xl p-4 outline-none focus:border-cyan-500 transition" placeholder="email@perusahaan.com">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-zinc-500 uppercase tracking-widest mb-2">Kebutuhan</label>
                            <textarea rows="4" class="w-full bg-zinc-950/50 border border-white/10 text-white rounded-2xl p-4 outline-none focus:border-fuchsia-500 transition resize-none" placeholder="Ceritakan singkat tentang kebutuhan proyek IT Anda..."></textarea>
                        </div>
                        <button type="button" class="w-full bg-gradient-to-r from-cyan-500 to-fuchsia-600 text-white font-black py-5 rounded-2xl hover:opacity-90 transition shadow-xl uppercase tracking-widest text-xs">
                            Kirim Pesan Sekarang
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <footer class="bg-zinc-950 py-16 border-t border-white/5 px-6">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="flex flex-col items-center md:items-start gap-4">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('logo_vidici.png') }}" alt="VIDICI" class="h-6 w-auto object-contain grayscale opacity-70">
                        <span class="font-bold text-xl tracking-tighter uppercase text-zinc-400">Vidya Diginara Cipta</span>
                    </div>
                    <p class="text-[10px] text-zinc-600 uppercase tracking-[0.2em]">Innovate, Collaborate, Grow Together.</p>
                </div>
                <p class="text-[10px] text-zinc-600 uppercase tracking-widest">&copy; {{ date('Y') }} PT Vidya Diginara Cipta. All Rights Reserved.</p>
                <div class="flex gap-8 text-[10px] font-bold text-zinc-500 uppercase tracking-widest">
                    <a href="#" class="hover:text-white transition">LinkedIn</a>
                    <a href="#" class="hover:text-white transition">Instagram</a>
                </div>
            </div>
        </footer>

    </div>
</x-app-layout>