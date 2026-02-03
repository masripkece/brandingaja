@extends('layouts.baru')

@section('content')

<!-- =======================
 HERO / PENJELASAN PELANGGAN
======================= -->
<section class="bg-white pt-14 pb-24">
  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

    <!-- TEXT -->
    <div>
      <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
        Pelanggan <span class="italic text-gray-500">BrandingAja</span>
      </h1>

      <p class="text-gray-600 text-lg leading-relaxed mb-6">
        Pelanggan BrandingAja adalah individu maupun bisnis yang membutuhkan
        layanan branding digital, media, dan publikasi secara profesional
        dalam satu platform terpercaya.
      </p>

      <p class="text-gray-600 leading-relaxed mb-10">
        Kami menghubungkan pelanggan dengan mitra terbaik
        untuk memastikan setiap kebutuhan branding
        ditangani secara optimal dan transparan.
      </p>

      <!-- STATS -->
      <div class="grid grid-cols-3 gap-6">
        <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
          <div class="text-3xl font-bold text-gray-900">1200+</div>
          <p class="text-sm text-gray-500 mt-1">Clients</p>
        </div>

        <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
          <div class="text-3xl font-bold text-gray-900">98%</div>
          <p class="text-sm text-gray-500 mt-1">Satisfaction</p>
        </div>

        <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm">
          <div class="text-3xl font-bold text-gray-900">Enterprise</div>
          <p class="text-sm text-gray-500 mt-1">Trusted</p>
        </div>
      </div>
    </div>

    <!-- IMAGE -->
    <div class="relative">
      <div class="absolute inset-0 bg-gradient-to-tr from-gray-100 to-white rounded-3xl"></div>
      <img
        src="{{ asset('img/pelanggan.png') }}"
        alt="Pelanggan BrandingAja"
        class="relative rounded-3xl shadow-lg"
      >
    </div>

  </div>
</section>
<!-- =======================
 BENEFIT PELANGGAN
======================= -->
<section class="bg-gray-50 py-28">
  <div class="max-w-7xl mx-auto px-6">

    <!-- TITLE -->
    <div class="max-w-3xl mx-auto text-center mb-24">
      <span class="text-sm tracking-widest text-gray-500 uppercase">
        Value for Clients
      </span>

      <h2 class="mt-4 text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
        Keuntungan Menjadi
        <span class="italic text-gray-500">Pelanggan</span>
      </h2>

      <div class="w-20 h-1 bg-gray-300 mx-auto my-6 rounded-full"></div>

      <p class="text-gray-600 text-lg leading-relaxed">
        Semua kebutuhan branding Anda dikelola secara profesional
        dalam satu ekosistem digital yang terstruktur.
      </p>
    </div>

    <!-- GRID -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- CARD -->
      <div class="bg-white p-10 rounded-3xl border border-gray-200 shadow-sm">
        <h4 class="text-lg font-semibold text-gray-900 mb-4">
          Mitra Terverifikasi
        </h4>
        <p class="text-gray-600 text-sm leading-relaxed">
          Seluruh mitra melalui proses seleksi ketat
          untuk memastikan kualitas dan profesionalisme layanan.
        </p>
      </div>

      <div class="bg-white p-10 rounded-3xl border border-gray-200 shadow-sm">
        <h4 class="text-lg font-semibold text-gray-900 mb-4">
          Proses Efisien
        </h4>
        <p class="text-gray-600 text-sm leading-relaxed">
          Pemesanan dan pengelolaan layanan dilakukan
          secara praktis melalui satu platform terintegrasi.
        </p>
      </div>

      <div class="bg-white p-10 rounded-3xl border border-gray-200 shadow-sm">
        <h4 class="text-lg font-semibold text-gray-900 mb-4">
          Transparansi Biaya
        </h4>
        <p class="text-gray-600 text-sm leading-relaxed">
          Seluruh harga dan detail layanan ditampilkan
          secara jelas tanpa biaya tersembunyi.
        </p>
      </div>

      <div class="bg-white p-10 rounded-3xl border border-gray-200 shadow-sm">
        <h4 class="text-lg font-semibold text-gray-900 mb-4">
          Monitoring Proyek
        </h4>
        <p class="text-gray-600 text-sm leading-relaxed">
          Perkembangan proyek dapat dipantau secara
          real-time dengan sistem yang terstruktur.
        </p>
      </div>

      <div class="bg-white p-10 rounded-3xl border border-gray-200 shadow-sm">
        <h4 class="text-lg font-semibold text-gray-900 mb-4">
          Keamanan Data
        </h4>
        <p class="text-gray-600 text-sm leading-relaxed">
          Informasi dan transaksi pelanggan dilindungi
          oleh sistem keamanan modern dan terpercaya.
        </p>
      </div>

      <div class="bg-white p-10 rounded-3xl border border-gray-200 shadow-sm">
        <h4 class="text-lg font-semibold text-gray-900 mb-4">
          Dukungan Profesional
        </h4>
        <p class="text-gray-600 text-sm leading-relaxed">
          Tim support berpengalaman siap mendampingi
          Anda di setiap tahap layanan.
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
        Tutorial Menjadi Pelanggan BrandingAja
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
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection
