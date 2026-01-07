<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NusaFresh Supply | Distributor Pangan Segar UMKM</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 text-slate-900 font-sans">

    <nav
        class="sticky top-0 z-[100] bg-white/70 backdrop-blur-xl border-b border-slate-100/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">

                <div class="flex items-center gap-3 group cursor-pointer">
                    <div
                        class="w-10 h-10 bg-emerald-600 rounded-xl rotate-3 group-hover:rotate-12 transition-transform duration-300 flex items-center justify-center shadow-lg shadow-emerald-200">
                        <span class="text-white font-black text-xl">N</span>
                    </div>
                    <div class="font-black text-2xl tracking-tighter text-slate-900">
                        Nusa<span class="text-emerald-600">Fresh</span>
                    </div>
                </div>

                <div class="hidden md:flex items-center space-x-10 text-[13px] font-bold uppercase tracking-widest">
                    <a href="{{ route('products.index') }}"
                        class="text-slate-500 hover:text-emerald-600 transition-colors relative group">
                        Katalog
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-500 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="{{ route('services.index') }}" class="text-slate-500 hover:text-emerald-600 transition-colors relative group">
                        Layanan
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-500 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="{{ route('partnership.index') }}" class="text-slate-500 hover:text-emerald-600 transition-colors relative group">
                        Kemitraan
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-emerald-500 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </div>

                <div class="flex items-center gap-6">
                    <a href="/admin/login"
                        class="hidden sm:block text-sm font-bold text-slate-400 hover:text-slate-900 transition-colors">
                        Login Mitra
                    </a>
                    <a href="/portal-admin"
                        class="relative group overflow-hidden bg-slate-900 text-white px-7 py-3 rounded-2xl text-[13px] font-black uppercase tracking-wider transition-all duration-300 hover:shadow-[0_10px_20px_-5px_rgba(15,23,42,0.3)] active:scale-95">
                        <span class="relative z-10">Portal Admin</span>
                        <div
                            class="absolute inset-0 bg-emerald-600 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                        </div>
                    </a>

                    <button class="md:hidden p-2 text-slate-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </nav>

    <header class="relative bg-[#FCFDFD] pt-20 pb-40 overflow-hidden">
        <div
            class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-[600px] h-[600px] bg-emerald-50 rounded-full blur-[120px] opacity-60">
        </div>
        <div
            class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/4 w-[400px] h-[400px] bg-orange-50 rounded-full blur-[100px] opacity-50">
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col lg:flex-row items-center relative z-10">
            <div class="lg:w-3/5 mb-16 lg:mb-0 pr-0 lg:pr-12">
                <div
                    class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-emerald-100/50 border border-emerald-200 mb-6">
                    <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span>
                    <span class="text-emerald-800 font-bold tracking-[0.15em] uppercase text-[10px]">Premium Supply
                        Chain</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-black text-slate-900 leading-[1.1] tracking-tight">
                    Standar Baru <br>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 via-emerald-500 to-teal-500">
                        Kesegaran Pangan.
                    </span>
                </h1>

                <p class="mt-8 text-slate-500 text-lg md:text-xl leading-relaxed max-w-xl font-medium">
                    NusaFresh mengkurasi bahan baku terbaik langsung dari sumbernya untuk menjaga <span
                        class="text-slate-900 font-semibold italic">kualitas rasa</span> dan <span
                        class="text-slate-900 font-semibold italic">efisiensi biaya</span> bisnis kuliner Anda.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row gap-4">
                    <button
                        class="group relative bg-slate-900 text-white px-10 py-5 rounded-2xl font-bold text-lg shadow-2xl hover:bg-emerald-600 transition-all duration-300 overflow-hidden">
                        <a href="{{ route('products.index') }}" class="relative z-10">Eksplor Katalog</a>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-teal-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </button>
                    <button
                        class="flex items-center justify-center space-x-3 border-2 border-slate-200 px-10 py-5 rounded-2xl font-bold text-lg hover:border-emerald-200 hover:bg-emerald-50/30 transition-all">
                        <span>Hubungi Sales</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </div>

                <div class="mt-12 flex items-center gap-6 border-t border-slate-100 pt-8">
                    <div class="flex -space-x-3">
                        <img class="w-10 h-10 rounded-full border-4 border-white object-cover"
                            src="https://i.pravatar.cc/100?u=1" alt="User">
                        <img class="w-10 h-10 rounded-full border-4 border-white object-cover"
                            src="https://i.pravatar.cc/100?u=2" alt="User">
                        <img class="w-10 h-10 rounded-full border-4 border-white object-cover"
                            src="https://i.pravatar.cc/100?u=3" alt="User">
                    </div>
                    <p class="text-sm text-slate-500 font-medium">
                        Bergabung dengan <span class="text-slate-900 font-bold">200+</span> bisnis yang telah beralih ke
                        NusaFresh.
                    </p>
                </div>
            </div>

            <div class="lg:w-2/5 relative">
                <div
                    class="relative w-full aspect-[4/5] rounded-[60px] overflow-hidden shadow-[0_50px_100px_-20px_rgba(0,0,0,0.15)] transform rotate-2 hover:rotate-0 transition-transform duration-700">
                    <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=1000"
                        class="w-full h-full object-cover scale-110 hover:scale-100 transition-transform duration-700"
                        alt="Fresh Vegetables">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                </div>

                <div
                    class="absolute -bottom-6 -left-12 bg-white/90 backdrop-blur-xl p-6 rounded-[32px] shadow-2xl border border-white/50 hidden md:block animate-bounce-slow">
                    <div class="flex items-center gap-4">
                        <div
                            class="w-14 h-14 bg-orange-500 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg shadow-orange-200">
                            🥦
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold">Kualitas Terjamin
                            </p>
                            <p class="text-lg font-bold text-slate-900">Grade A Freshness</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="max-w-7xl mx-auto px-6 -mt-20 relative z-30">
        <div
            class="bg-white/80 backdrop-blur-2xl border border-white shadow-[0_32px_64px_-16px_rgba(0,0,0,0.1)] rounded-[40px] p-10 lg:p-14">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-y-12 gap-x-4">

                <div class="relative group text-center md:text-left px-4">
                    <div class="hidden md:block absolute right-0 top-1/2 -translate-y-1/2 h-12 w-px bg-slate-200/60">
                    </div>
                    <div class="space-y-1">
                        <p
                            class="text-5xl font-black text-slate-900 tracking-tighter group-hover:text-emerald-600 transition-colors duration-300">
                            50<span class="text-emerald-500 font-medium text-3xl">+</span>
                        </p>
                        <div class="flex flex-col">
                            <span
                                class="text-[11px] font-bold text-emerald-600 uppercase tracking-[0.2em] mb-1">Impact</span>
                            <span class="text-sm font-semibold text-slate-500 leading-tight">Mitra UMKM <br
                                    class="hidden lg:block"> Terverifikasi</span>
                        </div>
                    </div>
                </div>

                <div class="relative group text-center md:text-left px-4">
                    <div class="hidden md:block absolute right-0 top-1/2 -translate-y-1/2 h-12 w-px bg-slate-200/60">
                    </div>
                    <div class="space-y-1">
                        <p
                            class="text-5xl font-black text-slate-900 tracking-tighter group-hover:text-emerald-600 transition-colors duration-300">
                            100<span class="text-emerald-500 font-medium text-3xl">+</span>
                        </p>
                        <div class="flex flex-col">
                            <span
                                class="text-[11px] font-bold text-emerald-600 uppercase tracking-[0.2em] mb-1">Inventory</span>
                            <span class="text-sm font-semibold text-slate-500 leading-tight">Varian Produk <br
                                    class="hidden lg:block"> Segar & Pilihan</span>
                        </div>
                    </div>
                </div>

                <div class="relative group text-center md:text-left px-4">
                    <div class="hidden md:block absolute right-0 top-1/2 -translate-y-1/2 h-12 w-px bg-slate-200/60">
                    </div>
                    <div class="space-y-1">
                        <p
                            class="text-5xl font-black text-slate-900 tracking-tighter group-hover:text-emerald-600 transition-colors duration-300">
                            02
                        </p>
                        <div class="flex flex-col">
                            <span
                                class="text-[11px] font-bold text-emerald-600 uppercase tracking-[0.2em] mb-1">Logistics</span>
                            <span class="text-sm font-semibold text-slate-500 leading-tight">Pusat Distribusi <br
                                    class="hidden lg:block"> (Gudang Aktif)</span>
                        </div>
                    </div>
                </div>

                <div class="group text-center md:text-left px-4">
                    <div class="space-y-1">
                        <div class="flex items-center justify-center md:justify-start gap-2">
                            <p
                                class="text-5xl font-black text-slate-900 tracking-tighter group-hover:text-emerald-600 transition-colors duration-300">
                                Daily
                            </p>
                        </div>
                        <div class="flex flex-col">
                            <span
                                class="text-[11px] font-bold text-emerald-600 uppercase tracking-[0.2em] mb-1">Service</span>
                            <span class="text-sm font-semibold text-slate-500 leading-tight">Jadwal Pengiriman <br
                                    class="hidden lg:block"> Tanpa Jeda</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-32">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="space-y-3">
                <div class="flex items-center gap-2">
                    <span class="w-8 h-1 bg-emerald-500 rounded-full"></span>
                    <span class="text-emerald-600 font-bold text-xs uppercase tracking-widest">Our Collection</span>
                </div>
                <h2 class="text-4xl font-extrabold text-slate-900 tracking-tight">Katalog Unggulan</h2>
                <p class="text-slate-500 text-lg">Kurasi bahan baku segar dengan standar QC ketat setiap pagi.</p>
            </div>
            <a href="{{ route('products.index') }}"
                class="group flex items-center gap-3 bg-white border border-slate-200 px-6 py-3 rounded-full font-bold text-slate-700 hover:bg-slate-900 hover:text-white transition-all duration-300 shadow-sm">
                Lihat Semua Produk
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-1 transition-transform"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            @foreach ($products->take(4) as $product)
                {{-- Kita ambil 4 produk teratas untuk Landing Page --}}
                <div
                    class="group relative bg-white rounded-[32px] p-4 border border-slate-100 transition-all duration-500 hover:shadow-[0_30px_60px_-15px_rgba(0,0,0,0.1)] hover:-translate-y-2">

                    <div class="absolute top-6 left-6 z-10">
                        <span
                            class="bg-white/90 backdrop-blur-md text-emerald-700 text-[10px] font-bold px-3 py-1.5 rounded-full shadow-sm border border-emerald-100">
                            @if ($product->stock > 50)
                                STOK MELIMPAH
                            @elseif($product->stock <= 5)
                                STOK TERBATAS
                            @else
                                BARU PANEN
                            @endif
                        </span>
                    </div>

                    <div class="aspect-[4/5] bg-slate-50 rounded-[24px] overflow-hidden mb-6 relative">
                        <img src="{{ Str::startsWith($product->image, 'http') ? $product->image : asset('storage/' . $product->image) }}"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                            alt="{{ $product->name }}">

                        <div
                            class="absolute inset-0 bg-slate-900/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <a href="{{ route('products.index') }}" {{-- Nanti ganti ke detail produk jika sudah ada --}}
                                class="bg-white text-slate-900 p-4 rounded-2xl shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="px-2 space-y-2">
                        <div class="flex justify-between items-center">
                            <span class="text-[11px] font-bold uppercase tracking-[0.15em] text-orange-500">
                                {{ $product->category }}
                            </span>
                            <div class="flex items-center text-amber-400 text-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 fill-current"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="ml-1 text-slate-400 font-bold">4.9</span>
                            </div>
                        </div>
                        <h3
                            class="text-xl font-extrabold text-slate-900 group-hover:text-emerald-600 transition-colors truncate">
                            {{ $product->name }}
                        </h3>
                        <div class="flex items-baseline gap-2">
                            <span class="text-xl font-black text-slate-900">
                                {{ $product->formatted_price }}
                            </span>
                            <span class="text-sm text-slate-400 font-medium">/ {{ $product->unit }}</span>
                        </div>

                        <a href="https://wa.me/6281234567890?text=Halo NusaFresh, saya tertarik memesan {{ $product->name }}"
                            target="_blank"
                            class="w-full mt-6 bg-slate-50 text-slate-900 py-4 rounded-2xl text-sm font-bold group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300 flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="relative bg-emerald-900 py-32 overflow-hidden">
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-emerald-800 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/2 opacity-50">
        </div>
        <div
            class="absolute bottom-0 left-0 w-64 h-64 bg-teal-800 rounded-full blur-[80px] translate-y-1/2 -translate-x-1/4 opacity-30">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-24 space-y-4">
                <h2 class="text-emerald-400 font-bold tracking-[0.2em] uppercase text-xs">Sistem Rantai Pasok
                    Terintegrasi</h2>
                <h3 class="text-4xl md:text-5xl font-black text-white leading-tight">Mulai Berlangganan <br> Hanya
                    dalam 3 Langkah</h3>
                <p class="text-emerald-100/70 text-lg">Proses pemesanan yang dirancang khusus untuk efisiensi
                    operasional bisnis kuliner Anda.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 lg:gap-12 relative">
                <div
                    class="hidden md:block absolute top-1/2 left-[15%] right-[15%] h-px border-t-2 border-dashed border-emerald-500/30 -translate-y-12">
                </div>

                <div class="group relative space-y-6 text-center">
                    <div
                        class="relative z-10 w-24 h-24 bg-white/10 backdrop-blur-xl border border-white/20 rounded-[32px] flex items-center justify-center mx-auto transform group-hover:rotate-6 transition-transform duration-500">
                        <span class="text-4xl font-black text-white">01</span>
                        <div
                            class="absolute -top-2 -right-2 w-8 h-8 bg-emerald-500 rounded-full border-4 border-emerald-900 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h4 class="text-2xl font-bold text-white tracking-tight">Pilih Produk</h4>
                        <p class="text-emerald-100/60 leading-relaxed text-sm lg:text-base px-4">
                            Kurasi kebutuhan dapur Anda dari katalog premium kami yang diperbarui <span
                                class="text-white font-semibold">setiap jam 05:00 pagi</span>.
                        </p>
                    </div>
                </div>

                <div class="group relative space-y-6 text-center">
                    <div
                        class="relative z-10 w-24 h-24 bg-white/10 backdrop-blur-xl border border-white/20 rounded-[32px] flex items-center justify-center mx-auto transform group-hover:-rotate-6 transition-transform duration-500">
                        <span class="text-4xl font-black text-white">02</span>
                        <div
                            class="absolute -top-2 -right-2 w-8 h-8 bg-orange-500 rounded-full border-4 border-emerald-900 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zm-4 0H9v2h2V9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h4 class="text-2xl font-bold text-white tracking-tight">Konfirmasi WhatsApp</h4>
                        <p class="text-emerald-100/60 leading-relaxed text-sm lg:text-base px-4">
                            Sistem kami mengirimkan <span class="text-white font-semibold">invoice otomatis</span>.
                            Validasi stok dilakukan secara real-time untuk kepastian kirim.
                        </p>
                    </div>
                </div>

                <div class="group relative space-y-6 text-center">
                    <div
                        class="relative z-10 w-24 h-24 bg-emerald-500 shadow-[0_20px_40px_-10px_rgba(16,185,129,0.5)] rounded-[32px] flex items-center justify-center mx-auto transform group-hover:scale-110 transition-transform duration-500">
                        <span class="text-4xl font-black text-white">03</span>
                    </div>
                    <div class="space-y-3">
                        <h4 class="text-2xl font-bold text-white tracking-tight">Cold-Chain Delivery</h4>
                        <p class="text-emerald-100/60 leading-relaxed text-sm lg:text-base px-4">
                            Pengiriman menggunakan armada berpendingin untuk menjaga <span
                                class="text-white font-semibold">kualitas nutrisi</span> sampai di depan pintu Anda.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-24 text-center">
                <button
                    class="bg-white text-emerald-900 px-12 py-5 rounded-2xl font-black text-lg shadow-xl hover:bg-emerald-50 hover:-translate-y-1 transition-all duration-300">
                    Daftar Sebagai Mitra UMKM
                </button>
            </div>
        </div>
    </section>

    <section class="py-32 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent">
        </div>

        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-20 items-center">

                <div class="space-y-12">
                    <div class="space-y-6">
                        <div
                            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-orange-50 border border-orange-100">
                            <span class="text-orange-600 text-[10px] font-bold uppercase tracking-[0.2em]">The
                                Partnership</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-[1.1] tracking-tight">
                            Mengapa Ratusan UMKM <br>
                            <span class="text-emerald-600">Memercayai NusaFresh?</span>
                        </h2>
                        <p
                            class="text-slate-500 text-lg leading-relaxed max-w-xl font-medium border-l-4 border-emerald-500 pl-6 py-2 italic">
                            "Kami memahami bahwa stabilitas bisnis Anda bergantung pada kualitas bahan baku kami. Itulah
                            janji yang kami pegang."
                        </p>
                    </div>

                    <div class="grid gap-8">
                        <div
                            class="group flex gap-6 p-6 rounded-[24px] transition-all duration-300 hover:bg-slate-50 border border-transparent hover:border-slate-100">
                            <div
                                class="flex-shrink-0 w-14 h-14 bg-white shadow-[0_10px_30px_-5px_rgba(0,0,0,0.05)] rounded-2xl flex items-center justify-center text-emerald-600 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0110 21a3.745 3.745 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.745 3.745 0 013.296-1.043A3.745 3.745 0 0114 3a3.745 3.745 0 013.296 1.043 3.745 3.745 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                </svg>
                            </div>
                            <div class="space-y-1">
                                <h4 class="text-xl font-bold text-slate-900 leading-none">Kontrol Kualitas Berlapis
                                </h4>
                                <p class="text-slate-500 leading-relaxed text-sm">Setiap unit produk melewati 2 tahap
                                    inspeksi QC untuk menjamin standar kesegaran tertinggi hingga ke tangan Anda.</p>
                            </div>
                        </div>

                        <div
                            class="group flex gap-6 p-6 rounded-[24px] transition-all duration-300 hover:bg-slate-50 border border-transparent hover:border-slate-100">
                            <div
                                class="flex-shrink-0 w-14 h-14 bg-white shadow-[0_10px_30px_-5px_rgba(0,0,0,0.05)] rounded-2xl flex items-center justify-center text-orange-600 group-hover:scale-110 transition-transform">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="space-y-1">
                                <h4 class="text-xl font-bold text-slate-900 leading-none">Logistik Presisi Subuh</h4>
                                <p class="text-slate-500 leading-relaxed text-sm">Armada khusus kami bergerak di dini
                                    hari, memastikan bahan baku tiba sebelum operasional dapur Anda dimulai.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div class="space-y-6">
                        <div class="group relative h-80 rounded-[40px] overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=600"
                                class="w-full h-full object-cover transition-transform duration-[2s] group-hover:scale-125">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-emerald-900/80 to-transparent flex items-end p-8">
                                <div>
                                    <p class="text-white font-bold text-2xl tracking-tight">Segar</p>
                                    <p class="text-emerald-200 text-xs font-medium uppercase tracking-widest mt-1">
                                        Direct from farm</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-32 bg-slate-900 rounded-[40px] flex items-center justify-center p-8">
                            <div class="text-center">
                                <p class="text-emerald-500 font-black text-3xl tracking-tighter">99%</p>
                                <p class="text-white/60 text-[10px] uppercase font-bold tracking-widest">SLA Delivery
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-12 space-y-6">
                        <div class="h-32 bg-emerald-600 rounded-[40px] flex items-center justify-center p-8">
                            <div class="text-center">
                                <p class="text-white font-black text-3xl tracking-tighter">B2B</p>
                                <p class="text-emerald-100 text-[10px] uppercase font-bold tracking-widest">Pricing
                                    Model</p>
                            </div>
                        </div>
                        <div class="group relative h-80 rounded-[40px] overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1550989460-0adf9ea622e2?auto=format&fit=crop&q=80&w=600"
                                class="w-full h-full object-cover transition-transform duration-[2s] group-hover:scale-125">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-orange-900/80 to-transparent flex items-end p-8">
                                <div>
                                    <p class="text-white font-bold text-2xl tracking-tight">Terpercaya</p>
                                    <p class="text-orange-200 text-xs font-medium uppercase tracking-widest mt-1">
                                        Certified quality</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-[#FCFDFD] overflow-hidden border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-6 mb-16 text-center">
            <div
                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-slate-100 border border-slate-200 mb-6">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-slate-600 font-bold text-[10px] uppercase tracking-[0.2em]">Verified
                    Partnership</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight">
                Telah Dipercaya oleh <span class="text-emerald-600">50+ Unit Bisnis</span> Kuliner Nasional
            </h2>
        </div>

        <div class="relative flex overflow-x-hidden">
            <div class="py-12 animate-marquee whitespace-nowrap flex items-center gap-16 lg:gap-24">
                <span
                    class="text-3xl lg:text-4xl font-black italic text-slate-300 hover:text-emerald-600 transition-colors cursor-default tracking-tighter uppercase">Warung
                    Kita</span>
                <span
                    class="text-3xl lg:text-4xl font-black italic text-slate-300 hover:text-emerald-600 transition-colors cursor-default tracking-tighter uppercase font-serif">Resto
                    Sedap</span>
                <span
                    class="text-3xl lg:text-4xl font-black italic text-slate-300 hover:text-emerald-600 transition-colors cursor-default tracking-tighter uppercase">Katering
                    Ibu</span>
                <span
                    class="text-3xl lg:text-4xl font-black italic text-slate-300 hover:text-emerald-600 transition-colors cursor-default tracking-tighter uppercase font-mono">Cafe
                    Hub</span>
                <span
                    class="text-3xl lg:text-4xl font-black italic text-slate-300 hover:text-emerald-600 transition-colors cursor-default tracking-tighter uppercase">Nasi
                    Jinggo Elit</span>
                <span
                    class="text-3xl lg:text-4xl font-black italic text-slate-300 hover:text-emerald-600 transition-colors cursor-default tracking-tighter uppercase">Bento
                    Box Co.</span>
                <span
                    class="text-3xl lg:text-4xl font-black italic text-slate-300 hover:text-emerald-600 transition-colors cursor-default tracking-tighter uppercase">Warung
                    Kita</span>
                <span
                    class="text-3xl lg:text-4xl font-black italic text-slate-300 hover:text-emerald-600 transition-colors cursor-default tracking-tighter uppercase font-serif">Resto
                    Sedap</span>
                <span
                    class="text-3xl lg:text-4xl font-black italic text-slate-300 hover:text-emerald-600 transition-colors cursor-default tracking-tighter uppercase">Katering
                    Ibu</span>
                <span
                    class="text-3xl lg:text-4xl font-black italic text-slate-300 hover:text-emerald-600 transition-colors cursor-default tracking-tighter uppercase font-mono">Cafe
                    Hub</span>
            </div>

            <div
                class="pointer-events-none absolute inset-y-0 left-0 w-40 bg-gradient-to-r from-[#FCFDFD] to-transparent">
            </div>
            <div
                class="pointer-events-none absolute inset-y-0 right-0 w-40 bg-gradient-to-l from-[#FCFDFD] to-transparent">
            </div>
        </div>
    </section>

    <section class="py-32 bg-slate-50 relative overflow-hidden">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[600px] bg-emerald-50/50 rounded-full blur-[120px] -z-10">
        </div>

        <div class="max-w-3xl mx-auto px-6 relative">
            <div class="text-center mb-20 space-y-4">
                <span class="text-emerald-600 font-bold text-xs uppercase tracking-[0.3em]">Bantuan & Informasi</span>
                <h2 class="text-4xl font-black text-slate-900 tracking-tight">Sering Ditanyakan</h2>
                <p class="text-slate-500 font-medium">Temukan jawaban cepat untuk operasional bisnis Anda.</p>
            </div>

            <div class="space-y-4">
                <div
                    class="group border border-slate-200 bg-white rounded-[24px] overflow-hidden transition-all duration-300 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/5">
                    <details class="peer group" open>
                        <summary class="flex items-center justify-between cursor-pointer p-8 list-none">
                            <h4 class="text-lg font-bold text-slate-900 pr-4">Berapa minimal order di NusaFresh?</h4>
                            <div
                                class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 transition-transform duration-300 group-open:rotate-45"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M12 6v12m6-6H6" />
                                </svg>
                            </div>
                        </summary>
                        <div class="px-8 pb-8 text-slate-500 leading-relaxed border-t border-slate-50 pt-4">
                            Minimal order untuk mendapatkan <span class="text-emerald-600 font-bold">Gratis
                                Ongkir</span> adalah <span class="text-slate-900 font-bold">Rp 200.000</span> untuk
                            wilayah jangkauan kota. Di bawah nominal tersebut, akan dikenakan biaya flat pengiriman
                            sebesar Rp 15.000.
                        </div>
                    </details>
                </div>

                <div
                    class="group border border-slate-200 bg-white rounded-[24px] overflow-hidden transition-all duration-300 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/5">
                    <details class="peer group">
                        <summary class="flex items-center justify-between cursor-pointer p-8 list-none">
                            <h4 class="text-lg font-bold text-slate-900 pr-4">Kapan batas maksimal pemesanan?</h4>
                            <div
                                class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 transition-transform duration-300 group-open:rotate-45"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M12 6v12m6-6H6" />
                                </svg>
                            </div>
                        </summary>
                        <div class="px-8 pb-8 text-slate-500 leading-relaxed border-t border-slate-50 pt-4">
                            Untuk menjamin kesegaran barang yang baru dipanen dari petani, pemesanan untuk pengiriman
                            besok pagi maksimal dilakukan pada pukul <span
                                class="text-slate-900 font-bold underline decoration-emerald-500 underline-offset-4">21:00
                                WIB</span> setiap harinya.
                        </div>
                    </details>
                </div>

                <div
                    class="group border border-slate-200 bg-white rounded-[24px] overflow-hidden transition-all duration-300 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-900/5">
                    <details class="peer group">
                        <summary class="flex items-center justify-between cursor-pointer p-8 list-none">
                            <h4 class="text-lg font-bold text-slate-900 pr-4">Apakah ada harga grosir khusus mitra?
                            </h4>
                            <div
                                class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 transition-transform duration-300 group-open:rotate-45"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M12 6v12m6-6H6" />
                                </svg>
                            </div>
                        </summary>
                        <div class="px-8 pb-8 text-slate-500 leading-relaxed border-t border-slate-50 pt-4">
                            Tentu. Kami menyediakan skema harga berjenjang. Untuk pesanan volume besar (<span
                                class="text-slate-900 font-bold">> 50kg per item</span>), Anda akan otomatis masuk ke
                            kategori <span class="text-emerald-600 font-bold uppercase tracking-wider">Mitra
                                Platinum</span> dengan harga yang jauh lebih kompetitif.
                        </div>
                    </details>
                </div>
            </div>

            <div class="mt-16 text-center p-8 rounded-[32px] bg-white border border-slate-100 shadow-sm">
                <p class="text-slate-600 font-medium">Pertanyaan Anda belum terjawab?</p>
                <a href="#"
                    class="inline-block mt-4 text-emerald-600 font-black hover:text-emerald-700 transition-colors">
                    Tanya CS melalui WhatsApp &rarr;
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t border-slate-100 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-4 gap-12 mb-16">
            <div class="col-span-1 md:col-span-2">
                <div class="font-bold text-2xl text-green-600 mb-6">Nusa<span class="text-orange-500">Fresh</span>
                </div>
                <p class="text-slate-500 max-w-sm">Solusi rantai pasok pangan segar terbaik untuk pertumbuhan bisnis
                    UMKM kuliner di Indonesia.</p>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-slate-900">Kontak</h4>
                <ul class="text-slate-500 space-y-4 text-sm">
                    <li>📍 Jl. Pangan Raya No. 12, Tangerang</li>
                    <li>📞 +62 812-3456-7890</li>
                    <li>✉️ hello@nusafresh.id</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-slate-900">Jam Operasional</h4>
                <ul class="text-slate-500 space-y-4 text-sm">
                    <li>Senin - Sabtu: 05:00 - 17:00</li>
                    <li>Minggu: 05:00 - 12:00</li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 pt-8 border-t border-slate-50 text-center text-slate-400 text-xs">
            &copy; 2026 NusaFresh Supply. All rights reserved.
        </div>
    </footer>
</body>

</html>
