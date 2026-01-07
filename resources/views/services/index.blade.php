@extends('layouts.app')

@section('content')
<section class="relative bg-slate-950 py-32 lg:py-48 overflow-hidden">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-emerald-600/20 rounded-full blur-[120px] animate-pulse -translate-y-1/2 translate-x-1/4"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-blue-600/10 rounded-full blur-[100px] animate-bounce translate-y-1/2 -translate-x-1/4" style="animation-duration: 10s;"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="text-center space-y-8">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-md">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.4em]">Integrated Logistics</span>
            </div>
            
            <h1 class="text-6xl md:text-8xl font-black text-white tracking-tighter leading-[0.9]">
                Solusi <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-200">Rantai Pasok</span> <br> Masa Depan.
            </h1>
            
            <p class="text-slate-400 text-lg md:text-xl max-w-2xl mx-auto font-medium leading-relaxed opacity-80">
                Teknologi distribusi yang memastikan hasil tani lokal mendarat di dapur Anda dalam kondisi puncak kesegaran.
            </p>
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-6 -mt-24 relative z-20 pb-32">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <div class="group relative p-[1px] rounded-[48px] overflow-hidden transition-all duration-500 hover:scale-[1.02]">
            <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <div class="relative glass-card bg-white p-12 rounded-[47px] h-full flex flex-col items-start transition-colors group-hover:bg-slate-50/50">
                <div class="w-20 h-20 bg-emerald-500 text-white rounded-[24px] flex items-center justify-center mb-10 shadow-2xl shadow-emerald-200 group-hover:scale-110 group-hover:rotate-12 transition-all duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-3xl font-black text-slate-900 mb-6 tracking-tight italic uppercase">Express <br> Delivery</h3>
                <p class="text-slate-500 leading-relaxed font-medium">Sistem <span class="text-emerald-600 font-bold underline decoration-emerald-200 underline-offset-4">Logistik Subuh</span>. Menjamin pengiriman sebelum jam operasional dapur restoran Anda dimulai.</p>
                <div class="mt-auto pt-8 flex items-center gap-2 text-emerald-600 font-black text-xs uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">
                    Learn More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </div>
            </div>
        </div>

        <div class="group relative p-[1px] rounded-[48px] overflow-hidden transition-all duration-500 hover:scale-[1.02]">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-500 via-transparent to-transparent opacity-100 transition-opacity"></div>
            <div class="relative glass-card bg-white p-12 rounded-[47px] h-full flex flex-col items-start transition-colors group-hover:bg-slate-50/50">
                <div class="w-20 h-20 bg-orange-500 text-white rounded-[24px] flex items-center justify-center mb-10 shadow-2xl shadow-orange-200 group-hover:scale-110 group-hover:rotate-12 transition-all duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-3xl font-black text-slate-900 mb-6 tracking-tight italic uppercase text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-400">Perfect <br> Quality</h3>
                <p class="text-slate-500 leading-relaxed font-medium italic">"Bukan sekadar sortir."</p>
                <p class="text-slate-500 leading-relaxed font-medium">QC berlapis memastikan standar <span class="text-slate-900 font-bold uppercase tracking-tighter">Grade-A</span> pada setiap helai sayur dan buah.</p>
            </div>
        </div>

        <div class="group relative p-[1px] rounded-[48px] overflow-hidden transition-all duration-500 hover:scale-[1.02]">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <div class="relative glass-card bg-white p-12 rounded-[47px] h-full flex flex-col items-start transition-colors group-hover:bg-slate-50/50">
                <div class="w-20 h-20 bg-blue-600 text-white rounded-[24px] flex items-center justify-center mb-10 shadow-2xl shadow-blue-200 group-hover:scale-110 group-hover:rotate-12 transition-all duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-3xl font-black text-slate-900 mb-6 tracking-tight italic uppercase">UMKM <br> Support</h3>
                <p class="text-slate-500 leading-relaxed font-medium font-bold">Priority Stocking.</p>
                <p class="text-slate-500 leading-relaxed font-medium">Harga kompetitif dengan plafon pembayaran fleksibel khusus bagi mitra UMKM kuliner.</p>
            </div>
        </div>
    </div>

    <div class="mt-48">
        <div class="flex flex-col md:flex-row items-end justify-between mb-20 gap-6">
            <div class="text-left">
                <h2 class="text-[10px] font-black uppercase tracking-[0.5em] text-emerald-500 mb-4">Operations Workflow</h2>
                <h3 class="text-4xl md:text-5xl font-black text-slate-900 italic tracking-tighter uppercase">Rantai Pasok <br> Tanpa Celah.</h3>
            </div>
            <p class="text-slate-400 font-medium max-w-sm text-right">Transparansi penuh dari lahan petani hingga ke tangan Anda.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 relative">
            <div class="hidden md:block absolute top-1/2 left-0 w-full h-[2px] bg-slate-100 -z-10"></div>

            @php
                $steps = [
                    ['title' => 'Kurasi Petani', 'desc' => 'Pemilihan mitra tani terbaik.'],
                    ['title' => 'Sortir Ketat', 'desc' => 'Hanya Grade-A yang terpilih.'],
                    ['title' => 'Packaging', 'desc' => 'Kemas aman bebas kontaminasi.'],
                    ['title' => 'Subuh Delivery', 'desc' => 'Tiba sebelum matahari terbit.'],
                ];
            @endphp

            @foreach($steps as $index => $step)
            <div class="group relative bg-white border border-slate-100 p-10 rounded-[40px] transition-all duration-500 hover:bg-slate-900 hover:shadow-2xl hover:shadow-emerald-200">
                <div class="text-5xl font-black text-slate-50 group-hover:text-emerald-500/20 transition-colors mb-6 italic tracking-tighter">0{{ $index + 1 }}</div>
                <h4 class="font-black text-slate-900 group-hover:text-white mb-2 uppercase text-sm tracking-widest">{{ $step['title'] }}</h4>
                <p class="text-slate-400 text-xs font-medium leading-relaxed">{{ $step['desc'] }}</p>
                
                <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-emerald-500 rounded-full opacity-0 group-hover:opacity-100 transition-all group-hover:-bottom-4 shadow-lg shadow-emerald-400"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-6 pb-48">
    <div class="bg-emerald-600 rounded-[60px] p-16 md:p-24 text-center relative overflow-hidden group">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10"></div>
        <div class="relative z-10">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8 tracking-tighter italic">Siap Menjadi Mitra Kami?</h2>
            <p class="text-emerald-100 mb-12 max-w-xl mx-auto font-medium">Bergabunglah dengan 200+ bisnis kuliner yang telah mempercayakan suplai bahan bakunya kepada NusaFresh.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="bg-white text-emerald-600 px-10 py-5 rounded-3xl font-black uppercase tracking-widest hover:scale-110 transition-transform shadow-xl">Daftar Sekarang</a>
                <a href="#" class="bg-emerald-700/50 text-white backdrop-blur-md border border-white/20 px-10 py-5 rounded-3xl font-black uppercase tracking-widest hover:bg-emerald-700 transition-colors">Konsultasi Gratis</a>
            </div>
        </div>
    </div>
</section>
@endsection