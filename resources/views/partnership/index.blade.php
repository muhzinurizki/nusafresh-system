@extends('layouts.app')

@section('content')
<section class="relative py-32 lg:py-48 bg-slate-950 overflow-hidden">
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-emerald-600/10 rounded-full blur-[150px] animate-pulse -translate-y-1/2 translate-x-1/3"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] -translate-y-1/4 -translate-x-1/4"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 mb-8" data-aos="fade-up">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-ping"></span>
            <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.4em]">Scaling Local Economy</span>
        </div>
        
        <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.85] tracking-tighter mb-10 italic">
            Tumbuh Bersama <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-emerald-600">NusaFresh.</span>
        </h1>
        
        <p class="text-slate-400 text-lg md:text-xl leading-relaxed max-w-3xl mx-auto font-medium opacity-70">
            Kami bukan sekadar platform, kami adalah infrastruktur. Bergabunglah dalam jaringan distribusi pangan paling efisien di Indonesia.
        </p>

        <div class="flex flex-wrap justify-center gap-12 mt-20 pt-16 border-t border-white/5">
            <div class="text-center">
                <p class="text-4xl font-black text-white tracking-tighter">1.2k+</p>
                <p class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.2em] mt-2">Active Partners</p>
            </div>
            <div class="text-center">
                <p class="text-4xl font-black text-emerald-500 tracking-tighter">Rp 2.4B+</p>
                <p class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.2em] mt-2">Payout Distributed</p>
            </div>
            <div class="text-center">
                <p class="text-4xl font-black text-white tracking-tighter">24/7</p>
                <p class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.2em] mt-2">Support System</p>
            </div>
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-6 -mt-24 relative z-20 pb-48">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        
        <div class="group relative bg-white p-1 md:p-1.5 rounded-[60px] transition-all duration-700 hover:scale-[1.01]">
            <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-[60px] opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
            
            <div class="relative bg-white p-12 md:p-16 rounded-[56px] h-full overflow-hidden">
                <div class="absolute top-0 right-0 p-12 opacity-5 group-hover:opacity-10 transition-opacity">
                    <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m0 0l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                </div>

                <div class="relative z-10">
                    <span class="text-emerald-600 font-black text-[10px] uppercase tracking-[0.3em] mb-4 block">Supply Side</span>
                    <h3 class="text-5xl font-black text-slate-900 mb-8 italic tracking-tighter">Mitra Suplai</h3>
                    <p class="text-slate-500 mb-12 text-lg font-medium leading-relaxed">Dapatkan akses ke ribuan pembeli tanpa perantara. Kami jemput panen Anda, Anda terima bayaran instan.</p>
                    
                    <div class="space-y-4 mb-12">
                        @foreach(['Jemput di Lahan', 'Pembayaran H+1', 'Training Kualitas'] as $feature)
                        <div class="flex items-center gap-4 group/item">
                            <div class="w-6 h-6 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 group-hover/item:bg-emerald-500 group-hover/item:text-white transition-colors">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            </div>
                            <span class="font-bold text-slate-800 tracking-tight">{{ $feature }}</span>
                        </div>
                        @endforeach
                    </div>

                    <a href="#" class="group/btn relative inline-flex items-center justify-center w-full py-6 bg-slate-900 overflow-hidden rounded-3xl transition-all hover:bg-emerald-600">
                        <span class="relative z-10 text-white font-black uppercase tracking-widest text-xs">Mulai Pasok Hasil Bumi</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="group relative bg-white p-1 md:p-1.5 rounded-[60px] transition-all duration-700 hover:scale-[1.01]">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-500 to-red-500 rounded-[60px] opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
            
            <div class="relative bg-white p-12 md:p-16 rounded-[56px] h-full overflow-hidden">
                <div class="absolute top-0 right-0 p-12 opacity-5 group-hover:opacity-10 transition-opacity">
                    <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                </div>

                <div class="relative z-10">
                    <span class="text-orange-600 font-black text-[10px] uppercase tracking-[0.3em] mb-4 block">Demand Side</span>
                    <h3 class="text-5xl font-black text-slate-900 mb-8 italic tracking-tighter">Mitra Niaga</h3>
                    <p class="text-slate-500 mb-12 text-lg font-medium leading-relaxed">Bangun kerajaan retail Anda sendiri. Kami urus stok dan logistik, Anda fokus pada pelanggan.</p>
                    
                    <div class="space-y-4 mb-12">
                        @foreach(['Zero Stock Capital', 'Marketing Kit Lengkap', 'Pengiriman Subuh'] as $feature)
                        <div class="flex items-center gap-4 group/item">
                            <div class="w-6 h-6 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 group-hover/item:bg-orange-500 group-hover/item:text-white transition-colors">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                            </div>
                            <span class="font-bold text-slate-800 tracking-tight">{{ $feature }}</span>
                        </div>
                        @endforeach
                    </div>

                    <a href="#" class="group/btn relative inline-flex items-center justify-center w-full py-6 bg-slate-900 overflow-hidden rounded-3xl transition-all hover:bg-orange-600">
                        <span class="relative z-10 text-white font-black uppercase tracking-widest text-xs">Daftar Reseller Sekarang</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-48 text-center">
        <h2 class="text-[10px] font-black uppercase tracking-[0.5em] text-emerald-500 mb-6">Partnership Roadmap</h2>
        <h3 class="text-4xl md:text-5xl font-black text-slate-950 italic tracking-tighter mb-24 uppercase">Langkah Bergabung</h3>

        <div class="relative grid grid-cols-1 md:grid-cols-3 gap-20">
            <div class="hidden md:block absolute top-12 left-[15%] right-[15%] h-[1px] bg-slate-200 -z-10"></div>
            
            

            @php
                $steps = [
                    ['icon' => '📄', 'title' => 'Registrasi', 'desc' => 'Isi data profil dan verifikasi identitas mitra.'],
                    ['icon' => '🔍', 'title' => 'Audit Kualitas', 'desc' => 'Pengecekan standar produk atau kesiapan operasional.'],
                    ['icon' => '🤝', 'title' => 'Go Live!', 'desc' => 'Mulai transaksi dan kembangkan bisnis Anda.']
                ];
            @endphp

            @foreach($steps as $i => $step)
            <div class="group">
                <div class="w-24 h-24 bg-white border border-slate-100 rounded-full flex items-center justify-center mx-auto mb-8 shadow-xl group-hover:bg-slate-900 group-hover:scale-110 transition-all duration-500 relative">
                    <span class="text-3xl group-hover:scale-125 transition-transform duration-500">{{ $step['icon'] }}</span>
                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-emerald-500 text-white text-[10px] font-black rounded-full flex items-center justify-center border-4 border-white">0{{ $i+1 }}</div>
                </div>
                <h4 class="text-xl font-black text-slate-900 uppercase tracking-tight mb-4">{{ $step['title'] }}</h4>
                <p class="text-slate-400 text-sm font-medium leading-relaxed px-6 italic">"{{ $step['desc'] }}"</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection