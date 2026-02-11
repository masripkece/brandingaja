@extends('layouts.baru')

@section('content')

<!-- ================= HERO SLIDER ================= -->
<section class="relative h-[90vh] overflow-hidden">

  <!-- STATIC TEXT -->
  <div class="absolute inset-0 z-20 flex items-center">
    <div class="max-w-7xl mx-auto px-6 w-full">
      <div class="max-w-2xl">

        <span class="inline-block mb-4 text-sm tracking-widest text-white/80 uppercase">
          BrandingAja
        </span>

        <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-white leading-tight mb-6">
          Solusi Terbaik untuk<br>
          Mitra & Pelanggan
        </h1>

        <p class="text-white/85 text-lg leading-relaxed mb-10">
          Platform terpadu yang menghubungkan mitra dan pelanggan
          melalui sistem yang dirancang untuk efisiensi,
          transparansi, dan pertumbuhan bisnis.
        </p>

        <div class="flex gap-4">
          <a href="#"
             class="bg-white text-gray-900 px-7 py-3 rounded-full font-semibold
                    hover:bg-gray-100 transition">
            Jelajahi Sekarang
          </a>
        </div>

      </div>
    </div>
  </div>

  <!-- BACKGROUND SLIDER -->
  <div class="swiper heroSwiper h-full">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <img src="{{ asset('img/hero/hero1.jpg') }}"
             class="w-full h-full object-cover">
      </div>

      <div class="swiper-slide">
        <img src="{{ asset('img/hero/hero2.jpg') }}"
             class="w-full h-full object-cover">
      </div>

      <div class="swiper-slide">
        <img src="{{ asset('img/hero/hero3.webp') }}"
             class="w-full h-full object-cover">
      </div>

    </div>
  </div>

  <!-- LEFT GRADIENT OVERLAY -->
  <div class="absolute inset-0 z-10
              bg-gradient-to-r
              from-black/80 via-black/50 to-black/10">
  </div>

</section>
<script>
  new Swiper(".heroSwiper", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    effect: "fade",
    speed: 1500,
  });
</script>
<section
    x-data="{ show: false }"
    x-init="setTimeout(() => show = true, 120)"
    x-cloak
    class="py-24 lg:py-28 bg-gray-50 overflow-hidden"
>
  <div
    class="max-w-7xl mx-auto px-6
           grid grid-cols-1 lg:grid-cols-2
           gap-14 lg:gap-20 items-center"
  >

    <!-- ILUSTRASI (DARI KIRI) -->
    <div
      class="flex justify-center lg:justify-start
             transition-all duration-1000 ease-out"
      :class="show
        ? 'opacity-100 translate-x-0'
        : 'opacity-0 -translate-x-12'"
    >
      <img
        src="{{ asset('img/hero.png') }}"
        alt="Tentang Kami"
        class="w-full max-w-xs sm:max-w-sm lg:max-w-md"
      >
    </div>

    <!-- CONTENT (DARI KANAN) -->
    <div
      class="text-center lg:text-left
             transition-all duration-1000 delay-150 ease-out"
      :class="show
        ? 'opacity-100 translate-x-0'
        : 'opacity-0 translate-x-12'"
    >

      <span class="inline-block mb-4 text-sm tracking-widest text-gray-500 uppercase">
        Tentang Kami
      </span>

      <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6 leading-tight">
        Solusi Branding Digital<br class="hidden sm:block">
        yang Terstruktur & Terpercaya
      </h2>

      <p class="text-gray-600 leading-relaxed mb-6">
      Kami adalah konsultan komunikasi publik yang mengoptimalkan 
      manfaat media mainstream dan media sosial. Dengan komposisi 
      tim yang lengkap serta berpengalaman, kami telah dipercaya 
      mengelola branding banyak pihak. Mulai dari pemerintahan, 
      ruang usaha, instansi pendidikan sampai perorangan. Formula 
      utama yang kami tawarkan untuk membangun branding client
      adalah mengelola isu serta mengoptimalkan jaringan yang
      tersebar di seluruh wilayah Indonesia
      </p>

      <p class="text-gray-600 leading-relaxed mb-10">
      Goalnya adalah membuat, mengeksekusi serta mengevaluasi roadmap branding sesuai target yang saudara inginkan. 
      </p>

      <a href="#"
         class="inline-flex items-center gap-2
                text-[#02b0af] font-semibold
                hover:text-[#029994] transition">
        Pelajari Lebih Lanjut
        <span class="text-xl">→</span>
      </a>

    </div>

  </div>
</section>
      <!-- SLIDE 2 -->
      <div class="swiper-slide relative">
        <img src="{{ asset('img/hero/hero1.jpg') }}"
             class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/55"></div>
      </div>

    </div>
  </div>
</section>
<script>
  new Swiper(".heroSwiper", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    effect: "fade",
    speed: 1200,
  });
</script>


<!-- ================= BENEFIT LIST ================= -->
<section class="bg-slate-50 py-28">
  <div class="max-w-7xl mx-auto px-6">

    <!-- TITLE -->
    <div class="max-w-3xl mx-auto mb-20 text-center">
      <span class="text-sm tracking-widest text-slate-500 uppercase">
        Value Kami
      </span>

      <h2 class="mt-4 flex justify-center items-center">
  <img
    src="{{ asset('img/kenapa.png') }}"
    alt="Kenapa BrandingAja"
    class="h-12 md:h-14 object-contain translate-y-[2px]"
  />
</h2>








      <div class="w-24 h-1 mx-auto bg-[#02b0af] rounded-full my-6"></div>

      <p class="text-slate-600 text-lg leading-relaxed">
        Kami membangun sistem branding digital yang terstruktur,
        transparan, dan berorientasi pada pertumbuhan jangka panjang
        untuk mitra dan pelanggan.
      </p>
    </div>

    <!-- BENEFIT GRID -->
    <div class="grid md:grid-cols-2 gap-8">

      <!-- ITEM -->
      <div
        class="group flex gap-6 bg-white p-8 rounded-2xl border border-slate-200
               transition-all duration-500
               hover:-translate-y-1 hover:shadow-xl">

        <div
          class="flex-shrink-0 w-12 h-12 rounded-xl
                 bg-[#02b0af]/10 text-[#02b0af]
                 flex items-center justify-center text-lg font-semibold">
          ✓
        </div>

        <div>
          <h4 class="text-lg font-semibold mb-2 text-slate-900">
            Kerja Sama Berkelanjutan
          </h4>
          <p class="text-slate-600 text-sm leading-relaxed">
            Bukan kerja sekali jalan. Kami membangun branding jangka panjang
            yang konsisten dan terukur.
          </p>
        </div>
      </div>

      <!-- ITEM -->
      <div
        class="group flex gap-6 bg-white p-8 rounded-2xl border border-slate-200
               transition-all duration-500
               hover:-translate-y-1 hover:shadow-xl">

        <div
          class="flex-shrink-0 w-12 h-12 rounded-xl
                 bg-[#02b0af]/10 text-[#02b0af]
                 flex items-center justify-center text-lg font-semibold">
          ✓
        </div>

        <div>
          <h4 class="text-lg font-semibold mb-2 text-slate-900">
            Fokus Pengelolaan Isu
          </h4>
          <p class="text-slate-600 text-sm leading-relaxed">
            Kami merancang dan mengendalikan isu agar citra klien
            terbentuk secara strategis dan terkontrol.
          </p>
        </div>
      </div>

      <!-- ITEM -->
      <div
        class="group flex gap-6 bg-white p-8 rounded-2xl border border-slate-200
               transition-all duration-500
               hover:-translate-y-1 hover:shadow-xl">

        <div
          class="flex-shrink-0 w-12 h-12 rounded-xl
                 bg-[#02b0af]/10 text-[#02b0af]
                 flex items-center justify-center text-lg font-semibold">
          ✓
        </div>

        <div>
          <h4 class="text-lg font-semibold mb-2 text-slate-900">
            Jaringan Nasional
          </h4>
          <p class="text-slate-600 text-sm leading-relaxed">
            Didukung media dan mitra di berbagai wilayah Indonesia
            untuk menjangkau audiens yang lebih luas.
          </p>
        </div>
      </div>

      <!-- ITEM -->
      <div
        class="group flex gap-6 bg-white p-8 rounded-2xl border border-slate-200
               transition-all duration-500
               hover:-translate-y-1 hover:shadow-xl">

        <div
          class="flex-shrink-0 w-12 h-12 rounded-xl
                 bg-[#02b0af]/10 text-[#02b0af]
                 flex items-center justify-center text-lg font-semibold">
          ✓
        </div>

        <div>
          <h4 class="text-lg font-semibold mb-2 text-slate-900">
            Tim Berpengalaman
          </h4>
          <p class="text-slate-600 text-sm leading-relaxed">
            Dipercaya oleh pemerintah, bisnis, institusi pendidikan,
            hingga personal branding.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-28 bg-white relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6">

    <!-- HEADER -->
    <div class="text-center mb-20">
      <span class="text-sm tracking-widest text-slate-500 uppercase">
        Layanan Kami
      </span>

      <h2 class="mt-4 text-4xl font-bold text-slate-900">
        Solusi Digital untuk Pertumbuhan Bisnis
      </h2>

      <p class="mt-5 text-slate-600 max-w-2xl mx-auto leading-relaxed">
        Kami menyediakan layanan digital terintegrasi untuk membantu
        brand membangun kepercayaan, memperluas jangkauan,
        dan meningkatkan performa bisnis secara berkelanjutan.
      </p>
    </div>

    <!-- CARDS -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

      <!-- CARD -->
      <div
        class="group rounded-2xl bg-white border border-slate-200 p-8
               transition-all duration-500
               hover:-translate-y-2 hover:shadow-xl">

        <div class="w-12 h-1 bg-[#02b0af] mb-6 rounded-full"></div>

        <h3 class="text-xl font-semibold text-slate-900 mb-4">
          Sosial Media
        </h3>

        <p class="text-slate-600 mb-6 leading-relaxed">
          Pengelolaan konten media sosial secara profesional
          untuk membangun brand dan meningkatkan engagement.
        </p>

        <ul class="space-y-3 text-slate-700 text-sm">
          <li>• Instagram (Feed, Story, Reels)</li>
          <li>• TikTok (Konten & Campaign)</li>
          <li>• YouTube (Shorts & Podcast)</li>
        </ul>
      </div>

      <!-- CARD -->
      <div
        class="group rounded-2xl bg-white border border-slate-200 p-8
               transition-all duration-500
               hover:-translate-y-2 hover:shadow-xl">

        <div class="w-12 h-1 bg-[#02b0af] mb-6 rounded-full"></div>

        <h3 class="text-xl font-semibold text-slate-900 mb-4">
          Berita & Media Online
        </h3>

        <p class="text-slate-600 mb-6 leading-relaxed">
          Publikasi berita dan artikel di media online
          untuk meningkatkan kredibilitas dan kepercayaan publik.
        </p>

        <ul class="space-y-3 text-slate-700 text-sm">
          <li>• Portal Media Nasional</li>
          <li>• Press Release Resmi</li>
          <li>• Artikel SEO & Branding</li>
        </ul>
      </div>

      <!-- CARD -->
      <div
        class="group rounded-2xl bg-white border border-slate-200 p-8
               transition-all duration-500
               hover:-translate-y-2 hover:shadow-xl">

        <div class="w-12 h-1 bg-[#02b0af] mb-6 rounded-full"></div>

        <h3 class="text-xl font-semibold text-slate-900 mb-4">
          Consulting
        </h3>

        <p class="text-slate-600 mb-6 leading-relaxed">
          Pendampingan strategis untuk merancang
          komunikasi dan branding yang tepat sasaran.
        </p>

        <ul class="space-y-3 text-slate-700 text-sm">
          <li>• Analisis citra & isu publik</li>
          <li>• Strategi branding & komunikasi</li>
          <li>• Roadmap jangka pendek & panjang</li>
          <li>• Manajemen isu & opini publik</li>
        </ul>
      </div>

      <!-- CARD -->
      <div
        class="group rounded-2xl bg-white border border-slate-200 p-8
               transition-all duration-500
               hover:-translate-y-2 hover:shadow-xl">

        <div class="w-12 h-1 bg-[#02b0af] mb-6 rounded-full"></div>

        <h3 class="text-xl font-semibold text-slate-900 mb-4">
          ADS Digital
        </h3>

        <p class="text-slate-600 mb-6 leading-relaxed">
          Pengelolaan iklan digital untuk meningkatkan
          awareness, traffic, dan konversi bisnis.
        </p>

        <ul class="space-y-3 text-slate-700 text-sm">
          <li>• Strategi iklan digital</li>
          <li>• Google Ads & YouTube Ads</li>
          <li>• Target audiens presisi</li>
          <li>• Monitoring & optimasi performa</li>
        </ul>
      </div>

    </div>
  </div>
</section>



<!-- ================= 2 CARD ================= -->
<section class="py-24">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10">

    <div class="border rounded-2xl p-10 hover:shadow-xl transition">
      <h3 class="text-2xl font-semibold mb-4">Untuk Mitra</h3>
      <p class="text-gray-600 mb-6">
        Solusi branding dan sistem profesional
        untuk pengembangan mitra.
      </p>
      <a href="/mitra" class="text-yellow-500 font-semibold">Pelajari →</a>
    </div>

    <div class="border rounded-2xl p-10 hover:shadow-xl transition">
      <h3 class="text-2xl font-semibold mb-4">Untuk Pelanggan</h3>
      <p class="text-gray-600 mb-6">
        Akses layanan branding berkualitas
        dari mitra terpercaya.
      </p>
      <a href="/pelanggan" class="text-yellow-500 font-semibold">Pelajari →</a>
    </div>

  </div>
</section>



@endsection
