@extends('layouts.app')

@section('content')
<div class="relative bg-slate-950 py-24 lg:py-32 overflow-hidden">
    <div class="absolute inset-0 opacity-30">
        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80" class="w-full h-full object-cover scale-110 blur-sm">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/20 via-slate-950/80 to-slate-950"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">Verified Supply Chain</span>
            </div>
            <h1 class="text-5xl md:text-6xl font-black text-white tracking-tight leading-none">
                Bahan Baku <br> <span class="text-emerald-500">Kualitas Grade A.</span>
            </h1>
            <p class="text-slate-400 mt-6 text-lg md:text-xl font-medium leading-relaxed">
                Langsung dari petani lokal untuk menjaga stabilitas rasa dan biaya operasional dapur Anda.
            </p>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-6 -mt-10 pb-32">
    <div class="flex flex-col lg:flex-row gap-12">
        
        <aside class="w-full lg:w-1/4">
            <div class="sticky top-28 space-y-6">
                <div class="bg-white p-8 rounded-[32px] shadow-sm border border-slate-100">
                    <h3 class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 mb-6">Pilih Kategori</h3>
                    <nav class="space-y-2">
                        @php $categories = ['Sayuran', 'Buah', 'Bumbu', 'Protein']; @endphp
                        
                        <a href="/products" class="group flex items-center justify-between px-4 py-3.5 rounded-2xl transition-all duration-300 {{ !request('category') ? 'bg-slate-900 text-white shadow-xl' : 'text-slate-600 hover:bg-slate-50' }}">
                            <span class="font-bold text-sm italic">Semua Produk</span>
                            <span class="text-[10px] font-black opacity-40">∞</span>
                        </a>

                        @foreach($categories as $cat)
                        <a href="?category={{ $cat }}" class="group flex items-center justify-between px-4 py-3.5 rounded-2xl transition-all duration-300 {{ request('category') == $cat ? 'bg-emerald-600 text-white shadow-lg shadow-emerald-200' : 'text-slate-600 hover:bg-slate-50' }}">
                            <span class="font-bold text-sm italic">{{ $cat }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        @endforeach
                    </nav>
                </div>

                <div class="bg-emerald-600 rounded-[32px] p-8 text-white relative overflow-hidden group cursor-pointer">
                    <div class="relative z-10">
                        <p class="text-[10px] font-black uppercase tracking-widest opacity-80 mb-2">B2B Exclusive</p>
                        <h4 class="font-black text-xl leading-tight">Grosir? <br>Dapatkan Potongan.</h4>
                        <div class="mt-6 w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center group-hover:bg-white group-hover:text-emerald-600 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                        </div>
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-white/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                </div>
            </div>
        </aside>

        <div class="flex-1">
            <div class="flex flex-col md:flex-row gap-4 mb-10">
                <form action="/products" method="GET" class="flex-1">
                    <div class="relative group">
                        <input type="text" name="search" value="{{ $search ?? '' }}" 
                               placeholder="Cari kebutuhan dapur Anda..." 
                               class="w-full pl-14 pr-6 py-5 rounded-3xl border-none bg-white shadow-xl shadow-slate-200/50 focus:ring-2 focus:ring-emerald-500 transition-all font-medium text-slate-700">
                        <div class="absolute left-6 top-1/2 -translate-y-1/2 text-slate-300 group-focus-within:text-emerald-500 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                        </div>
                    </div>
                </form>
                <div class="bg-white px-6 py-4 rounded-3xl shadow-xl shadow-slate-200/50 flex items-center gap-4 border border-slate-50">
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Urutan</span>
                    <select class="bg-transparent border-none text-sm font-bold text-slate-900 focus:ring-0 cursor-pointer">
                        <option>Terbaru</option>
                        <option>Harga Rendah</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">
                @forelse($products as $product)
                <div class="group relative bg-white rounded-[40px] p-5 border border-slate-100 transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(0,0,0,0.1)] hover:-translate-y-3">
                    <div class="absolute top-8 left-8 z-20 pointer-events-none">
                        <span class="bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-full text-[9px] font-black text-emerald-600 uppercase tracking-wider shadow-sm border border-emerald-50">
                            {{ $product->category }}
                        </span>
                    </div>

                    <div class="aspect-[10/11] bg-slate-50 rounded-[32px] overflow-hidden mb-8 relative">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-1000">
                        @else
                            <div class="w-full h-full flex flex-col items-center justify-center text-slate-200">
                                <svg class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            </div>
                        @endif
                        
                        <div class="absolute inset-0 bg-emerald-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="bg-white text-slate-900 px-6 py-2 rounded-full text-[10px] font-black uppercase tracking-widest shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                Lihat Detail
                            </span>
                        </div>
                    </div>

                    <div class="px-2">
                        <h3 class="font-black text-slate-900 text-xl tracking-tight mb-1 group-hover:text-emerald-600 transition-colors">{{ $product->name }}</h3>
                        <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.2em] mb-6">Per {{ $product->unit }}</p>
                        
                        <div class="flex items-end justify-between">
                            <div>
                                <p class="text-[9px] text-slate-400 uppercase font-black tracking-widest mb-1">Business Price</p>
                                <p class="text-2xl font-black text-slate-900 tracking-tighter leading-none">{{ $product->formatted_price }}</p>
                            </div>
                            <a href="https://wa.me/6281234567890?text=Halo NusaFresh, saya ingin pesan {{ $product->name }}" 
                               target="_blank"
                               class="h-14 w-14 bg-slate-900 text-white rounded-2xl flex items-center justify-center hover:bg-emerald-600 hover:shadow-2xl hover:shadow-emerald-200 transition-all duration-300 active:scale-90 group/btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover/btn:rotate-90 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full py-32 text-center bg-white rounded-[48px] border-2 border-dashed border-slate-100">
                    <div class="w-24 h-24 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="h-10 w-10 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900">Produk Tidak Ditemukan</h3>
                    <p class="text-slate-400 mt-2 font-medium">Coba gunakan kata kunci yang lebih umum.</p>
                </div>
                @endforelse
            </div>

            <div class="mt-24">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection