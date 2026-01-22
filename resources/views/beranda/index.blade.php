<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrandinginAja</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- CSS tambahan -->
    <link rel="stylesheet" href="{{ asset('css/beranda/style.css') }}">
</head>
<body class="bg-white">

<!-- ================= NAVBAR ================= -->
<nav x-data="{mobileOpen:false}" class="bg-[#08b3ad] px-6 py-4 shadow-md relative z-50">

  <div class="max-w-7xl mx-auto flex items-center justify-between">

    <!-- Logo -->
    <div class="flex items-center gap-2">
      <img src="{{ asset('img/logo.png') }}" class="h-10">
      <span class="text-white font-bold text-2xl tracking-wide">
        Branding<span class="text-yellow-400 italic">Aja</span>
      </span>
    </div>

    <!-- Desktop Menu -->
    <ul class="hidden lg:flex items-center gap-6 text-white font-medium">
      <li><a href="{{ url('/tentang-kami') }}"class="{{ request()->is('tentang-kami') ? 'text-yellow-400 font-semibold' : 'hover:text-yellow-300 transition-colors' }}">Tentang Kami</a></li>
      <li><a href="{{ url('/layanan') }}"class="{{ request()->is('layanan') ? 'text-yellow-400 font-semibold' : 'hover:text-yellow-300 transition-colors' }}">Layanan</a></li>
      <li><a href="{{ url('/client') }}"class="{{ request()->is('client') ? 'text-yellow-400 font-semibold' : 'hover:text-yellow-300 transition-colors' }}">Client</a></li>
      <li><a href="{{ url('/jaringan') }}"class="{{ request()->is('jaringan') ? 'text-yellow-400 font-semibold' : 'hover:text-yellow-300 transition-colors' }}">Jaringan</a></li>


      <!-- Login Dropdown -->
      <li class="relative" x-data="{open:false}">
        <button @click="open = !open"
                class="flex items-center gap-1 hover:text-yellow-300 transition-colors focus:outline-none">
          Login
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>

        <!-- Dropdown muncul hanya saat klik -->
        <div x-show="open" x-transition x-cloak @click.outside="open=false"
             class="absolute top-full left-0 mt-2 w-44 bg-white text-gray-700 rounded-lg shadow-lg overflow-hidden z-20">
          <a href="/login/jaringan" class="block px-5 py-2 hover:bg-gray-100">Login Jaringan</a>
          <a href="/login/user" class="block px-5 py-2 hover:bg-gray-100">Login User</a>
        </div>
      </li>

      <!-- Daftar Dropdown -->
      <li class="relative" x-data="{open:false}">
        <button @click="open = !open"
                class="flex items-center gap-1 bg-yellow-400 text-black px-5 py-2 rounded-full font-semibold hover:bg-yellow-300 transition-colors focus:outline-none">
          Daftar
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>

        <!-- Dropdown muncul hanya saat klik -->
        <div x-show="open" x-transition x-cloak @click.outside="open=false"
             class="absolute top-full left-0 mt-2 w-56 bg-white text-gray-700 rounded-lg shadow-lg overflow-hidden z-20">
          <a href="/register/jaringan" class="block px-5 py-2 hover:bg-gray-100">Daftar Jaringan</a>
          <a href="/register/user" class="block px-5 py-2 hover:bg-gray-100">Daftar User</a>
        </div>
      </li>

    </ul>

    <!-- Hamburger Mobile -->
    <button @click="mobileOpen=!mobileOpen" class="lg:hidden text-white text-3xl focus:outline-none">
      ☰
    </button>
  </div>

  <!-- Mobile Menu -->
  <div x-show="mobileOpen"
     x-transition
     x-cloak
     class="lg:hidden absolute top-full left-0 w-full bg-[#08b3ad] text-white flex flex-col gap-2 p-4 shadow-lg">

  <!-- MENU UTAMA -->
  <a href="{{ url('/') }}"
     @click="mobileOpen=false"
     class="py-2 px-3 rounded transition-colors
     {{ request()->is('/') ? 'bg-[#06a19d] font-semibold' : 'hover:bg-[#06a19d]' }}">
     Beranda
  </a>

  <a href="{{ url('/tentang-kami') }}"
     @click="mobileOpen=false"
     class="py-2 px-3 rounded transition-colors
     {{ request()->is('tentang-kami') ? 'bg-[#06a19d] font-semibold' : 'hover:bg-[#06a19d]' }}">
     Tentang Kami
  </a>

  <a href="{{ url('/layanan') }}"
     @click="mobileOpen=false"
     class="py-2 px-3 rounded transition-colors
     {{ request()->is('layanan') ? 'bg-[#06a19d] font-semibold' : 'hover:bg-[#06a19d]' }}">
     Layanan
  </a>

  <a href="{{ url('/client') }}"
     @click="mobileOpen=false"
     class="py-2 px-3 rounded transition-colors
     {{ request()->is('client') ? 'bg-[#06a19d] font-semibold' : 'hover:bg-[#06a19d]' }}">
     Client
  </a>

  <a href="{{ url('/jaringan') }}"
     @click="mobileOpen=false"
     class="py-2 px-3 rounded transition-colors
     {{ request()->is('jaringan') ? 'bg-[#06a19d] font-semibold' : 'hover:bg-[#06a19d]' }}">
     Jaringan
  </a>

  <!-- LOGIN MOBILE -->
  <div x-data="{open:false}" class="relative mt-2">
    <button @click="open=!open"
            class="w-full text-left py-2 px-3 hover:bg-[#06a19d] rounded flex justify-between items-center transition-colors">
      Login<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
      </svg>
    </button>

    <div x-show="open" x-transition x-cloak class="flex flex-col mt-1 bg-white text-gray-700 rounded-lg overflow-hidden">
      <a href="/login/jaringan" @click="mobileOpen=false" class="px-5 py-2 hover:bg-gray-100 text-black">
        Login Jaringan
      </a>
      <a href="/login/user" @click="mobileOpen=false" class="px-5 py-2 hover:bg-gray-100 text-black">
        Login User
      </a>
    </div>
  </div>

  <!-- DAFTAR MOBILE -->
  <div x-data="{open:false}" class="relative mt-2">
    <button @click="open=!open"
            class="w-full text-left py-2 px-3 bg-yellow-400 text-black rounded-full font-semibold flex justify-between items-center hover:bg-yellow-300 transition-colors">
      Daftar
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
      </svg>
    </button>

    <div x-show="open" x-transition x-cloak class="flex flex-col mt-1 bg-white text-gray-700 rounded-lg overflow-hidden">
      <a href="/register/jaringan" @click="mobileOpen=false" class="px-5 py-2 hover:bg-gray-100 text-black">
        Daftar Jaringan
      </a>
      <a href="/register/user" @click="mobileOpen=false" class="px-5 py-2 hover:bg-gray-100 text-black">
        Daftar User
      </a>
    </div>
  </div>
</nav>

<!-- ================= HERO ================= -->
<section class="bg-[#08b3ad] rounded-b-[60px] px-6 py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

        <!-- TEXT (KIRI) -->
        <div class="text-center lg:text-left">
            <h1 class="text-white text-3xl lg:text-5xl font-bold mb-6">
                Trending <span class="text-yellow-400 italic">Aja</span>
            </h1>

            <p class="text-white leading-relaxed max-w-xl mx-auto lg:mx-0">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Admin e-commerce bertanggung jawab dalam pengelolaan sistem,
                mulai dari transaksi hingga keamanan data.
            </p>
        </div>

        <!-- HERO IMAGE (KANAN) -->
        <div class="flex justify-center lg:justify-end">
            <img
                src="{{ asset('img/hero.png') }}"
                alt="Hero Image"
                class="w-full max-w-xs md:max-w-sm lg:max-w-md"
            >
        </div>

    </div>
</section>


<!-- ================= CARD 3 ================= -->
<section class="py-20 px-6 bg-gray-50">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Card 1: Jaringan -->
        <div class="bg-[#08b3ad] text-white rounded-3xl shadow-xl p-8 flex flex-col items-center justify-center text-center h-64">
            <div class="text-5xl mb-4">💬</div>
            <h2 class="text-4xl font-bold">999+</h2>
            <p class="mt-2 text-xl font-medium">Jaringan</p>
        </div>

        <!-- Card 2: User -->
        <div class="bg-[#08b3ad] text-white rounded-3xl shadow-xl p-8 flex flex-col items-center justify-center text-center h-64">
            <div class="text-5xl mb-4">👥</div>
            <h2 class="text-4xl font-bold">9.999+</h2>
            <p class="mt-2 text-xl font-medium">User</p>
        </div>

        <!-- Card 3: Orderan -->
        <div class="bg-[#08b3ad] text-white rounded-3xl shadow-xl p-8 flex flex-col items-center justify-center text-center h-64">
            <div class="text-5xl mb-4">🛒</div>
            <h2 class="text-4xl font-bold">20.000+</h2>
            <p class="mt-2 text-xl font-medium">Orderan Diterima</p>
        </div>

    </div>
</section>


<!-- ================= VIDEO ================= -->
<section class="px-6 py-20">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- Video 1 -->
        <div class="w-full aspect-w-1 aspect-h-1 rounded-3xl shadow-2xl overflow-hidden">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/x7OTyfWxJkk?si=hzy6fYkS2BR5dn5D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <!-- Video 2 -->
        <div class="w-full aspect-w-1 aspect-h-1 rounded-3xl shadow-2xl overflow-hidden">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/x7OTyfWxJkk?si=hzy6fYkS2BR5dn5D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

    </div>
</section>



<!-- ================= USER & JARINGAN ================= -->
<section class="py-20 px-6 bg-gray-50">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">

    <!-- USER -->
    <div class="bg-white rounded-3xl shadow-lg p-10 border border-gray-200">
      
      <!-- Icon -->
      <div class="flex justify-center mb-6">
        <div class="w-24 h-24 flex items-center justify-center rounded-full bg-gray-100">
          <!-- User Icon -->
          <svg class="w-14 h-14 text-slate-700" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M15.75 7.5a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M4.5 20.25a7.5 7.5 0 0115 0" />
          </svg>
        </div>
      </div>

      <h3 class="text-3xl font-semibold text-center mb-8">User</h3>

      <ul class="space-y-5 text-gray-700 text-lg">
        <li class="flex gap-3 border-b pb-4">
          <span>👤</span>
          <span>Pendaftaran user baru pada sistem.</span>
        </li>
        <li class="flex gap-3 border-b pb-4">
          <span>⚙️</span>
          <span>Manajemen akun dan data pribadi.</span>
        </li>
        <li class="flex gap-3 border-b pb-4">
          <span>📊</span>
          <span>Monitoring aktivitas akun.</span>
        </li>
        <li class="flex gap-3 border-b pb-4">
          <span>✏️</span>
          <span>Update profil dan preferensi.</span>
        </li>
        <li class="flex gap-3">
          <span>💬</span>
          <span>Akses bantuan dan support.</span>
        </li>
      </ul>
    </div>

    <!-- JARINGAN -->
    <div class="bg-white rounded-3xl shadow-lg p-10 border border-gray-200">
      
      <!-- Icon -->
      <div class="flex justify-center mb-6">
        <div class="w-24 h-24 flex items-center justify-center rounded-full bg-gray-100">
          <!-- Network Icon -->
          <svg class="w-14 h-14 text-slate-700" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 6v6l4 2" />
            <circle cx="12" cy="12" r="9" />
          </svg>
        </div>
      </div>

      <h3 class="text-3xl font-semibold text-center mb-8">Jaringan</h3>

      <ul class="space-y-5 text-gray-700 text-lg">
        <li class="flex gap-3 border-b pb-4">
          <span>🌐</span>
          <span>Pendaftaran jaringan baru.</span>
        </li>
        <li class="flex gap-3 border-b pb-4">
          <span>🔗</span>
          <span>Manajemen koneksi antar user.</span>
        </li>
        <li class="flex gap-3 border-b pb-4">
          <span>📈</span>
          <span>Monitoring aktivitas jaringan.</span>
        </li>
        <li class="flex gap-3 border-b pb-4">
          <span>🤝</span>
          <span>Koordinasi dan kolaborasi tim.</span>
        </li>
        <li class="flex gap-3">
          <span>📑</span>
          <span>Laporan dan statistik jaringan.</span>
        </li>
      </ul>
    </div>

</section>

<!-- ================= JARINGAN KAMI ================= -->
<section class="py-28 px-6 bg-gray-50">
  <!-- TITLE -->
  <div class="flex justify-center mb-16">
    <span class="bg-[#08b3ad] text-white px-12 py-3 rounded-full text-sm tracking-widest shadow-md">
      JARINGAN KAMI
    </span>
  </div>

  <!-- CONTENT -->
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
    
    <!-- CARD 1 -->
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
      <img
        src="{{ asset('img/jaringan/j1.png') }}"
        class="w-full h-[260px] object-cover"
        alt="Jaringan 1"
      >
    </div>

    <!-- CARD 2 -->
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
      <img
        src="{{ asset('img/jaringan/j2.png') }}"
        class="w-full h-[260px] object-cover"
        alt="Jaringan 2"
      >
    </div>

    <!-- CARD 3 -->
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
      <img
        src="{{ asset('img/jaringan/j3.png') }}"
        class="w-full h-[260px] object-cover"
        alt="Jaringan 3"
      >
    </div>

  </div>
</section>

<!-- ================= FOOTER ================= -->
<footer class="bg-[#08b3ad] text-white px-6 pt-20 pb-10">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">

    <!-- BRAND -->
    <div>
      <h3 class="text-2xl font-bold tracking-wide">BrandinginAja</h3>
      <p class="mt-5 text-sm leading-relaxed text-white/90">
        Jalan Gajah Mungkur No. XX<br>
        Semarang – Jawa Tengah<br>
        Indonesia
      </p>
    </div>

    <!-- INFORMASI -->
    <div>
      <h4 class="font-semibold mb-5 text-lg">Informasi</h4>
      <ul class="space-y-3 text-sm text-white/90">
        <li><a href="#" class="hover:underline">Beranda</a></li>
        <li><a href="#" class="hover:underline">Tentang Kami</a></li>
        <li><a href="#" class="hover:underline">Tanya Jawab</a></li>
        <li><a href="#" class="hover:underline">Kontak Kami</a></li>
      </ul>
    </div>

    <!-- SOSIAL & PEMBAYARAN -->
    <div>
      <h4 class="font-semibold mb-5 text-lg">Sosial Media</h4>
      <div class="flex items-center gap-4 mb-8">
        <img src="{{ asset('img/ig.png') }}" class="w-6 h-6" alt="Instagram">
        <img src="{{ asset('img/tiktok.png') }}" class="w-6 h-6" alt="TikTok">
        <img src="{{ asset('img/fb.png') }}" class="w-6 h-6" alt="Facebook">
        <img src="{{ asset('img/x.png') }}" class="w-6 h-6" alt="X">
      </div>

      <h4 class="font-semibold mb-4 text-lg">Pembayaran</h4>
      <div class="flex items-center gap-4">
        <img src="{{ asset('img/bca.png') }}" class="h-6" alt="BCA">
        <img src="{{ asset('img/bni.png') }}" class="h-6" alt="BNI">
        <img src="{{ asset('img/qris.png') }}" class="h-6" alt="QRIS">
        <img src="{{ asset('img/bank-jateng.png') }}" class="h-6" alt="Bank Jateng">
      </div>
    </div>

    <!-- MAP -->
    <div>
      <h4 class="font-semibold mb-5 text-lg">Lokasi Kami</h4>
      <div class="rounded-2xl overflow-hidden shadow-lg border border-white/20">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9913963954887!2d110.4128092!3d-7.010294000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b00031ccebf%3A0xa82ee29fbaefc922!2sBacaaja!5e0!3m2!1sid!2sid!4v1768965163371!5m2!1sid!2sid"
          class="w-full h-48"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>

  </div>

  <!-- FOOTER BOTTOM -->
  <div class="mt-16 border-t border-white/30 pt-6 text-center text-sm text-white/80">
    © {{ date('Y') }} BrandinginAja. All rights reserved.
  </div>
</footer>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="{{ asset('js/loop-slider.js') }}"></script>

</body>
</html>
