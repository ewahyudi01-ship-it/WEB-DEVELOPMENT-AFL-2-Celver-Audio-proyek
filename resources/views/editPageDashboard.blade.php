@extends('mainLayout')

@section('content')

    {{-- Navbar --}}
    <div class="relative z-40">
        @include('shared.navbar')
    </div>

    {{-- pt-28 memberi jarak dari atas agar judul tidak tertutup navbar --}}
    <section class="relative min-h-screen w-full px-6 lg:px-12 pt-28 pb-20 overflow-hidden">

        {{-- Efek Sinar Emas (Dari kode awal temanmu) --}}
        <div class="fixed inset-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <div class="absolute -top-10 left-[5%] w-12 h-[800px] bg-gradient-to-b from-amber-300/25 via-amber-500/5 to-transparent -rotate-[40deg] blur-xl animate-pulse"></div>
            <div class="absolute -top-10 left-[20%] w-12 h-[450px] bg-gradient-to-b from-amber-200/20 via-amber-500/15 to-transparent rotate-[20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
            <div class="absolute -top-10 left-[24%] w-20 h-[550px] bg-gradient-to-b from-amber-200/20 via-amber-500/15 to-transparent rotate-[20deg] blur-lg [animation:pulse_7s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
            <div class="absolute -top-20 left-[25%] w-12 h-[850px] bg-gradient-to-b from-amber-300/40 via-amber-400/10 to-transparent rotate-[30deg] blur-2xl [animation:pulse_5s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
            <div class="absolute -top-10 left-[5%] w-12 h-[750px] bg-gradient-to-b from-amber-300/20 via-amber-500/15 to-transparent rotate-[20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
            <div class="absolute -top-10 right-[11%] w-24 h-[550px] bg-gradient-to-b from-amber-200/20 via-amber-500/15 to-transparent rotate-[20deg] blur-lg"></div>
            <div class="absolute -top-20 right-[25%] w-12 h-[850px] bg-gradient-to-b from-amber-300/40 via-amber-400/10 to-transparent rotate-[30deg] blur-2xl [animation:pulse_5s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
            <div class="absolute -top-10 right-[30%] w-12 h-[750px] bg-gradient-to-b from-amber-300/20 via-amber-500/15 to-transparent rotate-[20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
            <div class="absolute -top-10 right-[11%] w-24 h-[550px] bg-gradient-to-b from-amber-200/20 via-amber-500/10 to-transparent rotate-[20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        </div>

        {{-- Container Utama: Dilebarkan ke max-w-7xl agar space kosong kiri-kanan berkurang --}}
        <div class="relative z-10 max-w-7xl mx-auto flex flex-col gap-8">

            {{-- ========================================================= --}}
            {{-- BAGIAN 1: HEADER DASHBOARD                                --}}
            {{-- ========================================================= --}}
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-amber-500/20 pb-6">
                <div>
                    <span class="text-xs font-semibold uppercase tracking-widest text-amber-400">
                        Admin-Only Page
                    </span>
                    <h1 class="text-3xl lg:text-4xl font-bold text-white mt-1">
                        Dashboard <span class="text-amber-400">Edit Contents</span>
                    </h1>
                    <p class="text-neutral-400 text-sm mt-1">
                        Manage all page content from here.
                    </p>
                </div>

                <a href="{{ route('dashboard-route') }}" class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl bg-neutral-900 hover:bg-neutral-800 text-neutral-200 border border-neutral-700 text-sm font-medium transition shrink-0">
                    &larr; Back
                </a>
            </div>


            {{-- ========================================================= --}}
            {{-- BAGIAN 3: DAFTAR KONTEN WEBSITE (CRUD)                    --}}
            {{-- ========================================================= --}}
            <div class="rounded-2xl bg-neutral-900/80 backdrop-blur-md border border-amber-500/25 p-6 lg:p-8 shadow-xl">
                <div class="mb-6">
                    <span class="text-xs font-medium text-amber-400">Contents • editing</span>
                    <h2 class="text-xl font-bold text-white mt-0.5">Kelola Konten Halaman</h2>
                    <p class="text-xs text-neutral-400 mt-1">Pilih bagian di bawah ini untuk mengubah teks atau data di database.</p>
                </div>

                {{-- Susunan Item ke Bawah --}}
                <div class="flex flex-col gap-4">

                    {{-- 1. Layanan --}}
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-4 rounded-xl bg-neutral-950/70 border border-neutral-800 hover:border-amber-400/40 transition">
                        <div class="flex items-start sm:items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-amber-500/15 text-amber-400 flex items-center justify-center font-bold shrink-0">
                                1
                            </div>
                            <div>
                                <h3 class="text-base font-semibold text-white">Daftar Layanan</h3>
                                <p class="text-xs text-neutral-400 mt-0.5">Tambah, edit, atau hapus jenis jasa sound system yang ditawarkan.</p>
                            </div>
                        </div>
                        <button type="button" class="px-4 py-2 rounded-lg bg-neutral-800 hover:bg-amber-500 text-neutral-200 hover:text-neutral-950 text-xs font-semibold transition cursor-pointer shrink-0">
                            Kelola Layanan
                        </button>
                    </div>

                    {{-- 2. Achievements --}}
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-4 rounded-xl bg-neutral-950/70 border border-neutral-800 hover:border-amber-400/40 transition">
                        <div class="flex items-start sm:items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-amber-500/15 text-amber-400 flex items-center justify-center font-bold shrink-0">
                                2
                            </div>
                            <div>
                                <h3 class="text-base font-semibold text-white">Our Achievements</h3>
                                <p class="text-xs text-neutral-400 mt-0.5">Ubah teks pengalaman kerja, klien utama, dan jaminan kualitas.</p>
                            </div>
                        </div>
                        <button type="button" class="px-4 py-2 rounded-lg bg-neutral-800 hover:bg-amber-500 text-neutral-200 hover:text-neutral-950 text-xs font-semibold transition cursor-pointer shrink-0">
                            Edit Achievements
                        </button>
                    </div>

                    {{-- 3. About Us --}}
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-4 rounded-xl bg-neutral-950/70 border border-neutral-800 hover:border-amber-400/40 transition">
                        <div class="flex items-start sm:items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-amber-500/15 text-amber-400 flex items-center justify-center font-bold shrink-0">
                                3
                            </div>
                            <div>
                                <h3 class="text-base font-semibold text-white">About Us (Tentang Kami)</h3>
                                <p class="text-xs text-neutral-400 mt-0.5">Perbarui deskripsi profil Celver Audio di bagian bawah website.</p>
                            </div>
                        </div>
                        <button type="button" class="px-4 py-2 rounded-lg bg-neutral-800 hover:bg-amber-500 text-neutral-200 hover:text-neutral-950 text-xs font-semibold transition cursor-pointer shrink-0">
                            Edit About Us
                        </button>
                    </div>

                    {{-- 4. Contact --}}
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-4 rounded-xl bg-neutral-950/70 border border-neutral-800 hover:border-amber-400/40 transition">
                        <div class="flex items-start sm:items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-amber-500/15 text-amber-400 flex items-center justify-center font-bold shrink-0">
                                4
                            </div>
                            <div>
                                <h3 class="text-base font-semibold text-white">Informasi Kontak</h3>
                                <p class="text-xs text-neutral-400 mt-0.5">Ubah nomor WhatsApp, alamat email, dan lokasi operasional.</p>
                            </div>
                        </div>
                        <button type="button" class="px-4 py-2 rounded-lg bg-neutral-800 hover:bg-amber-500 text-neutral-200 hover:text-neutral-950 text-xs font-semibold transition cursor-pointer shrink-0">
                            Edit Kontak
                        </button>
                    </div>

                </div>
            </div>

        </div>

    </section>

@endsection