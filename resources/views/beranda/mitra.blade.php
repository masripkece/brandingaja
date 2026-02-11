@extends('layouts.baru')

@section('content')

<!-- =======================
 HERO / PENJELASAN MITRA
======================= -->
<section class="bg-white pt-14 pb-24">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20 items-center">

    <!-- TEXT -->
    <div class="max-w-xl">
      <span class="text-sm tracking-widest text-gray-500 uppercase">
        Partnership
      </span>

      <h1 class="mt-4 flex items-center justify-start">
  <img
    src="{{ asset('img/mitra.png') }}"
    alt="Mitra BrandingAja"
    class="h-12 md:h-14 object-contain translate-y-[2px]"
  />
</h1>



      <div class="w-16 h-1 bg-gray-300 rounded-full my-6"></div>

      <p class="text-gray-600 text-lg leading-relaxed mb-6">
        Mitra BrandingAja merupakan individu maupun perusahaan
        yang berkolaborasi dengan kami dalam menyediakan layanan
        branding, media digital, dan publikasi secara profesional.
      </p>

      <p class="text-gray-600 leading-relaxed">
        Kami menyediakan sistem, standar operasional,
        serta dukungan strategis agar mitra dapat fokus
        pada kualitas layanan dan pertumbuhan bisnis.
      </p>
    </div>

    <!-- VISUAL -->
    <div class="relative">
      <!-- subtle background layer -->
      <div class="absolute inset-0 bg-gradient-to-tr from-gray-100 to-white rounded-[32px]"></div>

      <img
        src="{{ asset('img/mitra.jpeg') }}"
        alt="Mitra BrandingAja"
        class="relative rounded-[32px] shadow-lg"
      >
    </div>

  </div>
</section>


<!-- =======================
 BENEFIT MITRA
======================= -->
<section class="bg-gray-50 py-24">
  <div class="max-w-7xl mx-auto px-6">

    <!-- TITLE -->
    <div class="max-w-3xl mx-auto text-center mb-16">
      <span class="text-sm tracking-widest text-gray-500 uppercase">
        Partnership Value
      </span>

      <h2 class="mt-4 text-4xl font-bold text-gray-900">
        Keuntungan Menjadi Mitra
      </h2>

      <p class="mt-4 text-gray-600 text-lg">
        Bukan sekadar kerja sama, tapi ekosistem untuk berkembang bersama.
      </p>
    </div>

    <!-- GRID -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- CARD -->
      <div
        class="bg-white p-8 rounded-2xl border border-gray-200
               shadow-sm hover:shadow-xl
               hover:-translate-y-1 transition-all duration-300">

        <h4 class="text-lg font-semibold mb-3 text-gray-900">
          Kerja Sama Berkelanjutan
        </h4>

        <p class="text-gray-600 text-sm leading-relaxed">
          BrandingAja membangun hubungan jangka panjang, bukan kerja sama
          sekali pakai atau beli putus.
        </p>
      </div>

      <div
        class="bg-white p-8 rounded-2xl border border-gray-200
               shadow-sm hover:shadow-xl
               hover:-translate-y-1 transition-all duration-300">

        <h4 class="text-lg font-semibold mb-3 text-gray-900">
          Strategi Branding yang Terarah
        </h4>

        <p class="text-gray-600 text-sm leading-relaxed">
          Setiap langkah dirancang berdasarkan tujuan klien,
          bukan sekadar aktivitas tanpa arah.
        </p>
      </div>

      <div
        class="bg-white p-8 rounded-2xl border border-gray-200
               shadow-sm hover:shadow-xl
               hover:-translate-y-1 transition-all duration-300">

        <h4 class="text-lg font-semibold mb-3 text-gray-900">
          Kredibilitas Profesional
        </h4>

        <p class="text-gray-600 text-sm leading-relaxed">
          Standar visual dan proses kerja meningkatkan
          kepercayaan klien dan reputasi mitra.
        </p>
      </div>

      <div
        class="bg-white p-8 rounded-2xl border border-gray-200
               shadow-sm hover:shadow-xl
               hover:-translate-y-1 transition-all duration-300">

        <h4 class="text-lg font-semibold mb-3 text-gray-900">
          Nilai Lebih dari Sekadar Materi
        </h4>

        <p class="text-gray-600 text-sm leading-relaxed">
          Selain manfaat finansial, mitra memperoleh nilai relasi,
          reputasi, dan kepercayaan publik.
        </p>
      </div>

      <div
        class="bg-white p-8 rounded-2xl border border-gray-200
               shadow-sm hover:shadow-xl
               hover:-translate-y-1 transition-all duration-300">

        <h4 class="text-lg font-semibold mb-3 text-gray-900">
          Pendapatan Berkelanjutan
        </h4>

        <p class="text-gray-600 text-sm leading-relaxed">
          Sistem kerja sama dirancang untuk mendukung
          pertumbuhan jangka panjang.
        </p>
      </div>

      <div
        class="bg-white p-8 rounded-2xl border border-gray-200
               shadow-sm hover:shadow-xl
               hover:-translate-y-1 transition-all duration-300">

        <h4 class="text-lg font-semibold mb-3 text-gray-900">
          Terbuka untuk Berbagai Pihak
        </h4>

        <p class="text-gray-600 text-sm leading-relaxed">
          Fleksibel untuk pemerintahan, bisnis, institusi,
          hingga perorangan.
        </p>
      </div>

    </div>
  </div>
</section>


<!-- =======================
 VIDEO TUTORIAL
======================= -->
<section class="bg-white pt-14 pb-24">
  <div class="max-w-7xl mx-auto px-6">

    <!-- TITLE -->
    <div class="max-w-3xl mx-auto text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-semibold text-gray-900 mb-3">
        Tutorial Menjadi Mitra BrandingAja
      </h2>
      <p class="text-gray-600 text-lg">
        Panduan singkat untuk memulai kerja sama secara profesional.
      </p>
    </div>

    <!-- VIDEO -->
    <div class="relative mx-auto w-full
                max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl">

      <div class="relative rounded-2xl overflow-hidden aspect-video
                  bg-white shadow-lg border border-gray-200">

        <iframe
          class="absolute inset-0 w-full h-full"
          src="https://www.youtube.com/embed/-7eXD5Clrns"
          title="Tutorial Menjadi Mitra BrandingAja"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen>
        </iframe>

      </div>
    </div>

  </div>
</section>


@endsection
