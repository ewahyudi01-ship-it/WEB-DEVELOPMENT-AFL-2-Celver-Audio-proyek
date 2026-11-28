@extends('mainLayout')

@section('content')

    {{-- Navbar --}}
    <div class="relative z-40">
        @include('shared.navbar')
    </div>

    {{-- pt-28 memberi jarak dari atas agar judul tidak tertutup navbar --}}
    <section class="relative min-h-screen w-full pt-28 pb-20 overflow-hidden">
    
    <div class="fixed inset-0 w-full h-full">
            @include('shared.backgroundDashboard')
    </div>
        {{-- Efek Sinar Emas (Dari kode awal temanmu) --}}
        @include('shared.rayLightEffect')


        {{-- Container Utama: Dilebarkan ke max-w-7xl agar space kosong kiri-kanan berkurang --}}
        <div class="relative z-10 max-w-7xl mx-auto flex flex-col gap-8">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-amber-500/20 pb-6 text-shadow-[2px_4px_6px_rgba(0,0,0,0.5)]">
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




            <form action="{{ route('update-scenery-banner', $sceneryBanner) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                <div class="rounded-2xl bg-neutral-900/80 backdrop-blur-md border border-amber-500/25 p-6 lg:p-8 shadow-xl">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5">
                        <div>
                            <span class="text-xs font-medium text-amber-400">banner • editing</span>
                            <h2 class="text-xl font-bold text-white mt-0.5">Main banner • scenery</h2>
                            <p class="text-xs text-neutral-400 mt-1">This image appears at the very top when visitors open the website.</p>
                        </div>

                        <button type="submit" class="px-4 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-400 text-neutral-950 font-semibold text-sm transition cursor-pointer shrink-0"
                            onclick="return confirm('Are you certain to update the banner?')">
                            Update Banner
                        </button>
                    </div>
            
                <div class="relative w-full h-48 rounded-xl border border-dashed border-amber-400/40 bg-neutral-950/80 flex flex-col items-center justify-center text-center p-4 overflow-hidden">
                    @if($sceneryBanner->image)
                    <input type="file" name="image" accept="image/*"  
                    class="absolute inset-0 w-full h-full rounded-xl px-4 py-2 text-sm text-neutral-300 border @error('image') border-red-500 @else border-neutral-700 @enderror z-10">

                        <img src="{{ asset('storage/' . $sceneryBanner->image) }}" class="absolute inset-0 w-full h-fit object-cover rounded-lg border border-neutral-700 ">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-amber-400 mb-2 z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z " />
                            </svg>
                            <p class="text-sm font-medium text-neutral-200 z-10 text-shadow-[2px_2px_6px_rgba(0,0,0,0.5)]">Current Image:</p>
                            <p class="text-xs text-neutral-400 mt-1 z-10 text-shadow-[2px_2px_6px_rgba(0,0,0,0.5)]">{{ $sceneryBanner->image }}</p>
                            @error('image')
                                <p class="mt-2 text-sm font-medium text-red-400 z-10">
                                    {{ $message }}
                                </p>
                            @enderror
                    </div>
                </div>
                @endif
            </form>





            <form action="{{ route('update-interior-banner', $interiorBanner) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                <div class="rounded-2xl bg-neutral-900/80 backdrop-blur-md border border-amber-500/25 p-6 lg:p-8 shadow-xl">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-5">
                        <div>
                            <span class="text-xs font-medium text-amber-400">Secondary banner • editing</span>
                            <h2 class="text-xl font-bold text-white mt-0.5">Decorative banner • interior</h2>
                            <p class="text-xs text-neutral-400 mt-1">This image appears at the top when visitors open the about us page.</p>
                        </div>

                        <div class="flex flex-col gap-2">
                            <button type="button" class="px-4 py-2.5 rounded-xl border border-amber-400 bg-amber-900/10 hover:bg-amber-900/30 text-neutral-100 text-sm transition cursor-pointer shrink-0">
                                Info
                            </button>
                            
                            <button type="submit" class="px-4 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-400 text-neutral-950 font-semibold text-sm transition cursor-pointer shrink-0"
                                onclick="return confirm('Are you certain to update the banner?')">
                                Update Banner
                            </button>
                        </div>
                    </div>

                    <div class="relative w-full h-48 rounded-xl border border-dashed border-amber-400/40 bg-neutral-950/80 flex flex-col items-center justify-center text-center p-4 overflow-hidden">
                    @if($interiorBanner->image)
                    <input type="file" name="image" accept="image/*"  
                    class="absolute inset-0 w-full h-full rounded-xl px-4 py-2 text-sm text-neutral-300 border @error('image') border-red-500 @else border-neutral-700 @enderror z-10">

                        <img src="{{ asset('storage/' . $interiorBanner->image) }}" class="absolute inset-0 w-full h-fit object-cover rounded-lg border border-neutral-700 ">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-amber-400 mb-2 z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="text-sm font-medium text-neutral-200 z-10 text-shadow-[2px_2px_6px_rgba(0,0,0,0.5)]">Current Image:</p>
                            <p class="text-xs text-neutral-400 mt-1 z-10 text-shadow-[2px_2px_6px_rgba(0,0,0,0.5)]">{{ $interiorBanner->image }}</p>
                            @error('image')
                                <p class="mt-2 text-sm font-medium text-red-400 z-10">
                                    {{ $message }}
                                </p>
                            @enderror
                    </div>
                    @endif
                </form>

            </div>
            
        </div>

    </section>

@endsection