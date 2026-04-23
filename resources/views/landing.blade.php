@extends('layouts.app')

@section('content')
<style>
    /* Meteor specific color palette overrides */
    body {
        background-color: #0b1120; /* Meteor deep blue background */
        background-image: radial-gradient(circle at top right, rgba(168, 85, 247, 0.15), transparent 40%),
                          radial-gradient(circle at bottom left, rgba(239, 68, 68, 0.1), transparent 40%);
    }
    .meteor-card {
        background: linear-gradient(145deg, #161e31 0%, #0d1323 100%);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }
    .meteor-terminal {
        background-color: #1a1a24;
    }
    .text-meteor-accent {
        color: #fca5a5; /* Light red/orange accent */
    }
</style>

<section id="home" class="pt-32 pb-16 lg:pt-40 lg:pb-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="max-w-2xl">
            <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight mb-6 leading-[1.1] text-white">
                ENTERPRISE IT <br> SOLUTIONS DENGAN <br> EFISIENSI 40%
            </h1>
            <p class="text-lg text-gray-400 mb-8 max-w-xl leading-relaxed">
                PT Vidya Diginara Cipta menggabungkan senior expertise dengan operational excellence untuk memberikan layanan IT berkualitas enterprise. Beroperasi dari pusat teknologi Indonesia[cite: 5, 18].
            </p>
            
            <div class="flex flex-wrap gap-4 font-semibold">
                <a href="#contact" class="bg-[#6366f1] hover:bg-[#4f46e5] text-white px-8 py-3 rounded-lg transition-all shadow-[0_0_20px_rgba(99,102,241,0.4)]">
                    Get Started
                </a>
                <a href="#portfolio" class="bg-transparent border border-gray-600 text-white hover:border-gray-400 px-8 py-3 rounded-lg transition-all">
                    View Portfolio
                </a>
            </div>
            <p class="text-xs text-gray-600 mt-4">(*) Syarat dan ketentuan berlaku dibandingkan in-house team[cite: 5].</p>
        </div>

        <div class="relative w-full max-w-lg mx-auto lg:ml-auto">
            <div class="absolute -inset-0.5 bg-gradient-to-r from-fuchsia-500 to-blue-500 rounded-xl blur opacity-30"></div>
            
            <div class="meteor-terminal rounded-xl relative z-10 shadow-2xl overflow-hidden border border-gray-800">
                <div class="flex items-center px-4 py-3 border-b border-gray-800 bg-[#14141d]">
                    <div class="flex space-x-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="mx-auto text-xs text-gray-500 font-mono">gsoc_monitor.sh</div>
                </div>
                <div class="p-6 font-mono text-sm leading-relaxed">
                    <div class="text-gray-400 mb-2"># Initialize VIDICI Operations</div>
                    <div class="text-green-400 mb-4">$ vidici start --managed-services</div>
                    
                    <div class="text-gray-400 mb-2"># Deploying Odoo ERP Instance</div>
                    <div class="text-green-400 mb-4">$ vidici deploy odoo --client=enterprise</div>
                    
                    <div class="text-gray-400 mb-2"># System Status</div>
                    <div class="text-blue-400">>[OK] 24/7 Support Active</div>
                    <div class="text-blue-400">>[OK] Cost Efficiency Validated (40%)</div>
                    <div class="text-white mt-2 animate-pulse">_</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-10 border-y border-gray-800/50 bg-[#080d19]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-xs font-bold tracking-widest text-gray-500 uppercase mb-8">Trusted By Enterprise Teams in Indonesia</p>
        <div class="flex flex-wrap justify-center gap-12 md:gap-24 opacity-80 grayscale hover:grayscale-0 transition-all duration-500">
            <div class="text-center">
                <div class="text-3xl font-black text-white">50+</div>
                <div class="text-xs font-bold text-gray-500 uppercase mt-1">Active Clients [cite: 22]</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-black text-white">100+</div>
                <div class="text-xs font-bold text-gray-500 uppercase mt-1">Projects Completed [cite: 22]</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-black text-white">20+</div>
                <div class="text-xs font-bold text-gray-500 uppercase mt-1">Years Experience [cite: 18]</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-black text-white">BUMN</div>
                <div class="text-xs font-bold text-gray-500 uppercase mt-1">& Telco Partners [cite: 25]</div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-extrabold text-white mb-4 uppercase tracking-wide">Layanan Komprehensif [cite: 6]</h2>
            <p class="text-gray-400 text-lg">Solusi IT yang fleksibel dan scalable untuk mendukung bisnis Anda [cite: 6]</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="meteor-card rounded-xl p-8 hover:-translate-y-1 transition-transform duration-300">
                <div class="text-red-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Managed Operations [cite: 6]</h3>
                <p class="text-sm text-gray-400 leading-relaxed">
                    Dedicated & Shared Services untuk kebutuhan operasional IT yang optimal dengan efisiensi biaya terbaik. Termasuk 24/7 Monitoring[cite: 6].
                </p>
            </div>

            <div class="meteor-card rounded-xl p-8 hover:-translate-y-1 transition-transform duration-300">
                <div class="text-orange-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Odoo Platform (ERP) [cite: 8]</h3>
                <p class="text-sm text-gray-400 leading-relaxed">
                    Implementasi end-to-end mulai dari instalasi, konfigurasi, integrasi API, hingga pelatihan pengguna untuk operasional yang transparan[cite: 8, 9, 18].
                </p>
            </div>

            <div class="meteor-card rounded-xl p-8 hover:-translate-y-1 transition-transform duration-300">
                <div class="text-purple-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Global SOC [cite: 6]</h3>
                <p class="text-sm text-gray-400 leading-relaxed">
                    Pusat operasi layanan global untuk pemantauan Real-time, Manajemen Insiden, dan Analisis Performa berbasis di Yogyakarta[cite: 6, 18].
                </p>
            </div>

            <div class="meteor-card rounded-xl p-8 hover:-translate-y-1 transition-transform duration-300">
                <div class="text-blue-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Custom Applications [cite: 6]</h3>
                <p class="text-sm text-gray-400 leading-relaxed">
                    Pengembangan aplikasi kustom (Web & Mobile, Cloud Native) yang secara spesifik disesuaikan dengan kebutuhan model bisnis Anda[cite: 6].
                </p>
            </div>

            <div class="meteor-card rounded-xl p-8 hover:-translate-y-1 transition-transform duration-300">
                <div class="text-green-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Banking Solutions [cite: 6]</h3>
                <p class="text-sm text-gray-400 leading-relaxed">
                    Sistem aplikasi perbankan aman dan sesuai regulasi. Dari Core Banking, Mobile Banking, hingga Integrasi Pembayaran (Payment Gateway)[cite: 6].
                </p>
            </div>

            <div class="meteor-card rounded-xl p-8 hover:-translate-y-1 transition-transform duration-300">
                <div class="text-cyan-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Expert Hubs [cite: 18]</h3>
                <p class="text-sm text-gray-400 leading-relaxed">
                    Operasional multi-kota. Jakarta (Managed Ops Hub), Yogyakarta (GSOC Center), dan Malang (Custom App Development Center)[cite: 18].
                </p>
            </div>
        </div>
    </div>
</section>

<section id="why-us" class="py-24 overflow-hidden relative">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-4xl h-[600px] bg-gradient-to-r from-red-500/10 to-blue-500/10 blur-[100px] rounded-full pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="bg-gradient-to-br from-[#1a2133]/80 to-[#0e1424]/80 border border-gray-800 rounded-3xl p-10 md:p-16 flex flex-col lg:flex-row items-center gap-16 backdrop-blur-md">
            
            <div class="flex-1">
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4 uppercase">
                    MENGAPA MEMILIH <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-purple-400">VIDICI?</span> [cite: 20]
                </h2>
                <p class="text-gray-400 mb-8">Kolaborasi strategis yang memberi dampak nyata untuk bisnis Anda melalui pendekatan yang lean dan talenta terbaik. [cite: 20]</p>
                
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="mt-1 text-red-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1">Cost Efficiency [cite: 20]</h4>
                            <p class="text-sm text-gray-500">Menghemat hingga 40% dari biaya operasional berbasis Jogja-Malang. [cite: 20]</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-4">
                        <div class="mt-1 text-purple-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1">Agile & Scalable [cite: 20]</h4>
                            <p class="text-sm text-gray-500">Pendekatan yang responsif terhadap perubahan kebutuhan perusahaan Anda. [cite: 20]</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="mt-1 text-blue-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1">Quality Assurance [cite: 20]</h4>
                            <p class="text-sm text-gray-500">Standar enterprise dengan best practices internasional. [cite: 20]</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#contact" class="inline-block border border-gray-600 hover:border-gray-400 text-white font-medium px-6 py-2.5 rounded-lg transition">
                        Explore Our Team
                    </a>
                </div>
            </div>

            <div class="flex-1 w-full max-w-sm lg:max-w-none">
                <div class="bg-[#5a67d8] rounded-2xl p-2 md:p-6 pb-0 transform rotate-1 hover:rotate-0 transition-transform duration-500 shadow-2xl">
                    <div class="bg-[#1e1e1e] rounded-t-xl border border-gray-700 shadow-inner overflow-hidden">
                        <div class="flex items-center px-4 py-2 border-b border-gray-800 bg-[#2d2d2d] text-xs font-mono">
                            <span class="text-gray-400 bg-[#1e1e1e] px-3 py-1 rounded-sm">odoo_config.yml</span>
                        </div>
                        <div class="p-6 font-mono text-sm">
                            <span class="text-purple-400">services:</span><br>
                            &nbsp;&nbsp;<span class="text-blue-300">erp_core:</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-400">image:</span> <span class="text-green-300">vidici/odoo-enterprise:17</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-400">deploy:</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-400">mode:</span> <span class="text-green-300">replicated</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-400">replicas:</span> <span class="text-yellow-300">3</span> <span class="text-gray-500"># High Availability</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-400">environment:</span><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <span class="text-green-300">DB_HOST=pg_cluster</span><br>
                            <br>
                            <span class="text-gray-500"># Managed by VIDICI Team [cite: 2]</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<div class="w-full grid md:grid-cols-2">
    <div class="bg-[#1f2937] p-12 md:p-20 text-left border-b md:border-b-0 md:border-r border-gray-800">
        <h3 class="text-3xl font-extrabold text-white mb-4">REKAM JEJAK KAMI [cite: 25]</h3>
        <p class="text-gray-400 mb-8 max-w-sm">Tim manajemen memiliki rekam jejak mendeliver proyek berskala enterprise mencakup sektor BUMN, telekomunikasi, dan korporasi nasional. [cite: 25]</p>
        <a href="#portfolio" class="inline-flex items-center gap-2 border border-gray-500 hover:border-white text-white font-medium px-6 py-2.5 rounded-lg transition">
            Lihat Portofolio 
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
        </a>
    </div>
    <div class="bg-[#4f46e5] p-12 md:p-20 text-left relative overflow-hidden">
        <div class="absolute bottom-0 right-0 opacity-20 transform translate-x-1/4 translate-y-1/4">
            <svg width="200" height="200" viewBox="0 0 100 100" fill="none" stroke="white" stroke-width="10"><line x1="20" y1="100" x2="100" y2="20"></line><line x1="0" y1="100" x2="100" y2="0"></line><line x1="-20" y1="100" x2="80" y2="0"></line></svg>
        </div>
        
        <h3 class="text-3xl font-extrabold text-white mb-4 relative z-10">KONSULTASI IT [cite: 27]</h3>
        <p class="text-indigo-200 mb-8 max-w-sm relative z-10">Tim kami siap membantu Anda menemukan dan merencanakan solusi IT yang tepat untuk kebutuhan bisnis Anda. [cite: 27]</p>
        <a href="#contact" class="inline-flex items-center gap-2 border border-indigo-300 hover:border-white text-white font-medium px-6 py-2.5 rounded-lg transition relative z-10">
            Hubungi Kami [cite: 27]
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
        </a>
    </div>
</div>
@endsection