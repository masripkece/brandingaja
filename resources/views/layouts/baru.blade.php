<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>BrandinginAja</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head>

<body class="bg-white text-gray-800">

{{-- resources/views/layouts/navbar.blade.php --}}

{{-- NAVBAR FINAL --}}
<nav
    x-data="{ open:false }"
    class="sticky top-0 z-50
           bg-white/80 backdrop-blur-md
           supports-[backdrop-filter]:bg-white/60
           border-b border-gray-200/60">

    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

        {{-- Logo --}}
        <div class="flex items-center">
            <a href="/">
                <img src="{{ asset('img/logo.png') }}" alt="BrandingAja" class="h-10 object-contain">
            </a>
        </div>

        {{-- HAMBURGER MOBILE --}}
        <button
            @click="open = !open"
            class="lg:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 transition"
            aria-label="Toggle Menu">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        {{-- DESKTOP MENU --}}
        <ul class="hidden lg:flex items-center gap-8 font-medium">

            {{-- Tentang Kami --}}
            <li>
                <a href="/"
                   class="relative font-medium transition
                   {{ request()->is('/') 
                      ? 'text-[#02b0af] after:absolute after:-bottom-1 after:left-0 after:w-full after:h-[2px] after:bg-[#02b0af]' 
                      : 'text-gray-600 hover:text-[#02b0af]' }}">
                    Tentang Kami
                </a>
            </li>

            {{-- Mitra --}}
            <li>
                <a href="/mitra"
                   class="relative font-medium transition
                   {{ request()->is('mitra') 
                      ? 'text-[#02b0af] after:absolute after:-bottom-1 after:left-0 after:w-full after:h-[2px] after:bg-[#02b0af]' 
                      : 'text-gray-600 hover:text-[#02b0af]' }}">
                    Mitra
                </a>
            </li>

            {{-- Pelanggan --}}
            <li>
                <a href="/pelanggan"
                   class="relative font-medium transition
                   {{ request()->is('pelanggan') 
                      ? 'text-[#02b0af] after:absolute after:-bottom-1 after:left-0 after:w-full after:h-[2px] after:bg-[#02b0af]' 
                      : 'text-gray-600 hover:text-[#02b0af]' }}">
                    Pelanggan
                </a>
            </li>

            {{-- LOGIN --}}
            <li x-data="{login:false}" class="relative">
                <button
                    @click="login=!login"
                    class="text-gray-600 hover:text-[#02b0af] transition">
                    Login
                </button>

                <div
                    x-show="login"
                    @click.outside="login=false"
                    x-transition
                    class="absolute mt-3 w-48
                           bg-white/90 backdrop-blur-md
                           shadow-xl rounded-xl overflow-hidden border border-gray-100">
                    <a href="/login/mitra" class="block px-4 py-3 hover:bg-gray-100">
                        Login Mitra
                    </a>
                    <a href="/login/pelanggan" class="block px-4 py-3 hover:bg-gray-100">
                        Login Pelanggan
                    </a>
                </div>
            </li>

            {{-- DAFTAR --}}
            <li x-data="{daftar:false}" class="relative">
                <button
                    @click="daftar=!daftar"
                    class="bg-[#02b0af] text-white px-6 py-2 rounded-full hover:bg-[#029994] transition">
                    Daftar
                </button>

                <div
                    x-show="daftar"
                    @click.outside="daftar=false"
                    x-transition
                    class="absolute mt-3 w-52
                           bg-white/90 backdrop-blur-md
                           shadow-xl rounded-xl overflow-hidden border border-gray-100">
                    <a href="/daftar/mitra" class="block px-4 py-3 hover:bg-gray-100">
                        Daftar Mitra
                    </a>
                    <a href="/daftar/pelanggan" class="block px-4 py-3 hover:bg-gray-100">
                        Daftar Pelanggan
                    </a>
                </div>
            </li>

        </ul>
    </div>

    {{-- MOBILE MENU --}}
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="lg:hidden bg-white/95 backdrop-blur-md border-t border-gray-200">

        <ul class="px-6 py-6 space-y-4 font-medium">
            <li>
                <a href="/"
                   class="block text-gray-700 hover:text-[#02b0af] {{ request()->is('/') ? 'text-[#02b0af]' : '' }}">
                   Tentang Kami
                </a>
            </li>
            <li>
                <a href="/mitra"
                   class="block text-gray-700 hover:text-[#02b0af] {{ request()->is('mitra') ? 'text-[#02b0af]' : '' }}">
                   Mitra
                </a>
            </li>
            <li>
                <a href="/pelanggan"
                   class="block text-gray-700 hover:text-[#02b0af] {{ request()->is('pelanggan') ? 'text-[#02b0af]' : '' }}">
                   Pelanggan
                </a>
            </li>

            <li class="pt-4 border-t border-gray-200">
                <a href="/login/mitra" class="block py-2 hover:text-[#02b0af]">Login Mitra</a>
                <a href="/login/pelanggan" class="block py-2 hover:text-[#02b0af]">Login Pelanggan</a>
            </li>

            <li>
                <a href="/daftar/mitra"
                   class="block text-center bg-[#02b0af] text-white py-3 rounded-xl hover:bg-[#029994] transition">
                   Daftar Mitra
                </a>
            </li>
            <li>
                <a href="/daftar/pelanggan"
                   class="block text-center bg-[#02b0af] text-white py-3 rounded-xl hover:bg-[#029994] transition">
                   Daftar Pelanggan
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- ================= CONTENT ================= -->
<main>
    @yield('content')
</main>

<!-- ================= FOOTER ================= -->
<!-- ================= FOOTER ================= -->
<footer class="bg-white text-gray-800 pt-16 pb-8 border-t border-gray-100 font-sans">
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

            <!-- COL 1: BRANDING AJA -->
            <div>
                <h3 class="mb-6 text-lg font-bold tracking-wider uppercase text-gray-900">
                    BrandingAja
                </h3>
                <ul class="space-y-4 text-sm font-semibold tracking-wide text-gray-600 uppercase">
                    <li>
                        <a href="{{ url('/') }}" class="hover:text-gray-900 transition">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/pelanggan') }}" class="hover:text-gray-900 transition">
                            Pelanggan
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/mitra') }}" class="hover:text-gray-900 transition">
                            Mitra
                        </a>
                    </li>
                    <li>
                        <a href="#bergabung" class="hover:text-gray-900 transition">
                            Bergabung
                        </a>
                    </li>
                </ul>
            </div>

          <!-- COL 2: IKUTI KAMI -->
<div>
    <h3 class="mb-6 text-lg font-bold tracking-wider uppercase text-gray-900">
        Ikuti Kami
    </h3>

    <ul class="space-y-4 text-sm font-semibold text-gray-600">
        
        <!-- Instagram -->
        <li>
            <a href="https://www.instagram.com/bacaajaco?igsh=MWxobWN5eXUweXpmbA==" target="_blank"
               class="flex items-center gap-3 hover:text-gray-900 transition">
                
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.65 0 3 1.35 3 3v10c0 1.65-1.35 3-3 3H7c-1.65 0-3-1.35-3-3V7c0-1.65 1.35-3 3-3h10zm-5 3.5A4.5 4.5 0 1016.5 12 4.51 4.51 0 0012 7.5zm0 7.4A2.9 2.9 0 1114.9 12 2.91 2.91 0 0112 14.9zm4.75-7.95a1.05 1.05 0 11-1.05-1.05 1.05 1.05 0 011.05 1.05z"/>
                </svg>

                Instagram
            </a>
        </li>

        <!-- YouTube -->
        <li>
            <a href="https://youtube.com/@bacaajaco-idn?si=5xcf4P6Tfl6EMpaq" target="_blank"
               class="flex items-center gap-3 hover:text-gray-900 transition">

                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.5 6.2s-.2-1.6-.8-2.3c-.7-.8-1.4-.8-1.8-.9C18.3 2.8 12 2.8 12 2.8h0s-6.3 0-8.9.2c-.4 0-1.1.1-1.8.9C.7 4.6.5 6.2.5 6.2S.3 8.1.3 10v1.9c0 1.9.2 3.8.2 3.8s.2 1.6.8 2.3c.7.8 1.6.8 2 .9 1.5.1 8.7.2 8.7.2s6.3 0 8.9-.2c.4 0 1.1-.1 1.8-.9.6-.7.8-2.3.8-2.3s.2-1.9.2-3.8V10c0-1.9-.2-3.8-.2-3.8zM9.75 14.7V7.3l6.2 3.7-6.2 3.7z"/>
                </svg>

                YouTube
            </a>
        </li>

        <!-- TikTok -->
        <li>
            <a href="https://www.tiktok.com/@bacaaja.co?_r=1&_t=ZS-93Uy6jGIlfQ" target="_blank"
               class="flex items-center gap-3 hover:text-gray-900 transition">

                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M21 8.6a5.5 5.5 0 01-4.8-2.8v8.3a6.1 6.1 0 11-5.3-6v3.3a2.9 2.9 0 102.1 2.8V2h3.2a5.5 5.5 0 005.8 5.6z"/>
                </svg>

                TikTok
            </a>
        </li>

        <!-- X / Twitter -->
        <li>
            <a href="https://x.com/brandingaja" target="_blank"
               class="flex items-center gap-3 hover:text-gray-900 transition">

                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18.2 2H21l-6.5 7.4L22 22h-6.8l-4.3-5.3L5.8 22H3l6.9-7.8L2 2h6.9l3.9 4.9L18.2 2z"/>
                </svg>

                X
            </a>
        </li>

    </ul>
</div>
           <!-- COL 3: INFORMASI -->
<div>
    <h3 class="mb-6 text-lg font-bold tracking-wider uppercase text-gray-900">
        Informasi
    </h3>

    <p class="text-sm font-medium leading-relaxed text-gray-700 mb-4">
        Jalan Gajah Mungkur No. XX<br>
        Semarang, Jawa Tengah<br>
        Indonesia
    </p>

    <!-- GOOGLE MAP -->
    <div class="w-full h-40 rounded-lg overflow-hidden shadow-sm border border-gray-200">
        <iframe
            class="w-full h-full"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81204.28126655557!2d110.46295887623356!3d-6.987669601100134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b00031ccebf%3A0xa82ee29fbaefc922!2sBacaaja!5e0!3m2!1sid!2sid!4v1769744556768!5m2!1sid!2sid"
            style="border:0;"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div> <!-- ⬅️ INI YANG TADI KURANG -->

            <!-- COL 4: PEMBAYARAN -->
            <div>
                <h3 class="mb-6 text-lg font-bold tracking-wider uppercase text-gray-900">
                    Pembayaran
                </h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center h-10">
                        <img src="{{ asset('img/bca.png') }}" alt="BCA" class="h-full object-contain">
                    </div>
                    <div class="flex items-center h-10">
                        <img src="{{ asset('img/bni.png') }}" alt="BNI" class="h-full object-contain">
                    </div>
                    <div class="flex items-center h-10">
                        <img src="{{ asset('img/bank-jateng.png') }}" alt="Bank Jateng" class="h-full object-contain">
                    </div>
                    <div class="flex items-center h-10">
                        <img src="{{ asset('img/qris.png') }}" alt="QRIS" class="h-full object-contain">
                    </div>
                </div>
            </div>

        </div>

        <!-- FOOTER BOTTOM -->
        <div class="border-t border-gray-100 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
            
          <!-- LOGO -->
<div class="flex items-center">
    <img 
        src="{{ asset('/img/logo.png') }}" 
        alt="BrandingAja Logo"
        class="h-10 w-auto"
    >
</div>

            <!-- COPYRIGHT -->
<div class="text-sm text-gray-500 font-medium text-center w-full">
    © {{ date('Y') }} BrandingAja. All rights reserved.
</div>

        </div>

    </div>
</footer>


</body>
</html>
