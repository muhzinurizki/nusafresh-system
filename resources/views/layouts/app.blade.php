<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NusaFresh - Premium Food Supply Chain</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        /* Mengurangi noise visual pada scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f8fafc; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #10b981; }
    </style>
</head>
<body class="bg-[#FCFDFD] text-slate-900 antialiased selection:bg-emerald-100 selection:text-emerald-900">

    <header>
        <nav class="sticky top-0 z-[100] bg-white/70 backdrop-blur-xl border-b border-slate-100/50 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex justify-between h-20 items-center">
                    
                    <a href="/" class="flex items-center gap-3 group">
                        <div class="w-10 h-10 bg-emerald-600 rounded-xl rotate-3 group-hover:rotate-0 transition-transform duration-300 flex items-center justify-center shadow-lg shadow-emerald-200">
                            <span class="text-white font-black text-xl">N</span>
                        </div>
                        <div class="font-black text-2xl tracking-tighter text-slate-900">
                            Nusa<span class="text-emerald-600">Fresh</span>
                        </div>
                    </a>

                    <div class="hidden md:flex items-center space-x-10 text-[13px] font-bold uppercase tracking-widest text-slate-500">
                        <a href="{{ route('products.index') }}" class="hover:text-emerald-600 transition-colors">Katalog</a>
                        <a href="{{ route('services.index') }}" class="hover:text-emerald-600 transition-colors">Layanan</a>
                        <a href="{{ route('partnership.index') }}" class="hover:text-emerald-600 transition-colors">Kemitraan</a>
                    </div>

                    <div class="flex items-center gap-4">
                        <a href="/admin/login" class="hidden sm:inline-block text-sm font-bold text-slate-400 hover:text-slate-900 transition-colors px-4">
                            Login Mitra
                        </a>
                        <a href="/admin/login" class="bg-slate-900 text-white px-6 py-3 rounded-2xl text-[13px] font-black uppercase tracking-wider hover:bg-emerald-600 transition-all shadow-xl shadow-slate-200">
                            Admin Portal
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-slate-900 pt-24 pb-12 overflow-hidden relative mt-20">
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-emerald-500 via-teal-400 to-emerald-500 opacity-50"></div>
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-4 gap-16 mb-20 text-white">
                <div class="lg:col-span-2 space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-emerald-500 rounded-lg flex items-center justify-center">
                            <span class="text-white font-black text-sm">N</span>
                        </div>
                        <div class="font-black text-2xl tracking-tighter">NusaFresh</div>
                    </div>
                    <p class="text-slate-400 text-base max-w-sm">Suplai bahan pangan segar terbaik untuk pertumbuhan bisnis UMKM dan Restoran Indonesia.</p>
                </div>
                <div>
                    <h4 class="font-bold mb-6 text-emerald-400 uppercase text-xs tracking-[0.2em]">Navigasi</h4>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Katalog Produk</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Cara Kerja</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Pusat Bantuan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-6 text-emerald-400 uppercase text-xs tracking-[0.2em]">Kontak</h4>
                    <p class="text-slate-400 text-sm leading-relaxed">Jl. Logistik Hijau No. 12<br>Tangerang, Banten<br>hello@nusafresh.id</p>
                </div>
            </div>
            <div class="pt-8 border-t border-slate-800 text-center">
                <p class="text-slate-500 text-xs">
                    &copy; 2026 NusaFresh Supply Chain Management. <br class="sm:hidden"> Built for Excellence.
                </p>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/628123456789" class="fixed bottom-8 right-8 z-[99] bg-emerald-500 text-white p-4 rounded-full shadow-[0_20px_40px_-10px_rgba(16,185,129,0.5)] hover:scale-110 active:scale-95 transition-all group">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
        </svg>
        <span class="absolute right-full mr-4 bg-slate-900 text-white text-[10px] font-bold px-3 py-1.5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Chat Sales</span>
    </a>

</body>
</html>