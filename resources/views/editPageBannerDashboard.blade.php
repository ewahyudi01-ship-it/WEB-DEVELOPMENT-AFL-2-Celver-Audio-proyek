@extends('mainLayout')

@section('content')

    {{-- Navbar --}}
    <div class="relative z-40">
        @include('shared.navbar')
    </div>

    {{-- pt-28 memberi jarak dari atas agar judul tidak tertutup navbar --}}
    <section class="relative min-h-screen w-full pt-28 pb-20 overflow-hidden">
    
    @include('shared.backgroundDashboard')

        {{-- Efek Sinar Emas (Dari kode awal temanmu) --}}
        @include('shared.rayLightEffect')


        {{-- Container Utama: Dilebarkan ke max-w-7xl agar space kosong kiri-kanan berkurang --}}
        <div class="relative z-10 max-w-7xl mx-auto flex flex-col gap-8">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-amber-500/20 pb-6">
                <div>
                    <span class="text-xs font-semibold uppercase tracking-widest text-amber-400">
                        Admin-Only Page
                    </span>
                    <h1 class="text-3xl lg:text-4xl font-bold text-white mt-1">
                        Dashboard <span class="text-amber-400">Edit Banners</span>
                    </h1>
                    <p class="text-neutral-400 text-sm mt-1">
                        Manage the display of banners for all content from here.
                    </p>
                </div>

                <a href="{{ route('dashboard-route') }}" class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl bg-neutral-900 hover:bg-neutral-800 text-neutral-200 border border-neutral-700 text-sm font-medium transition shrink-0">
                    &larr; Back
                </a>
            </div>

            
            <div class="rounded-2xl bg-neutral-900/80 backdrop-blur-md border border-amber-500/25 p-6 lg:p-8 shadow-xl">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5">
                    <div>
                        <span class="text-xs font-medium text-amber-400">Banner • editing</span>
                        <h2 class="text-xl font-bold text-white mt-0.5">Gambar Banner Halaman Depan</h2>
                        <p class="text-xs text-neutral-400 mt-1">Gambar ini tampil paling atas saat pengunjung membuka website.</p>
                    </div>

                    {{-- Nanti ubah button ini menjadi <a href="{{ route('...') }}"> --}}
                    <button type="button" class="px-4 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-400 text-neutral-950 font-semibold text-sm transition cursor-pointer shrink-0">
                        Ganti Banner
                    </button>
                </div>

                {{-- Kotak Preview Banner --}}
                <div class="w-full h-48 rounded-xl border border-dashed border-amber-400/40 bg-neutral-950/80 flex flex-col items-center justify-center text-center p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-amber-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-sm font-medium text-neutral-200">Preview Gambar Banner Saat Ini</p>
                    <p class="text-xs text-neutral-500 mt-1">Format yang didukung: JPG, PNG, atau WEBP</p>
                </div>
            </div>

        </div>

    </section>

@endsection