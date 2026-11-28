@extends('mainLayout')

@section('content')

    <div class="absolute top-0">
        @include('shared.navbar')
    </div>

    @include('shared.rayLightEffect')

    
<section class="min-h-screen bg-[#100e0c] pt-35 py-16 lg:pt-50">

    <div class="mx-auto max-w-2xl">

        <div class="relative flex w-full items-center justify-between">
            <div class="mb-8">
                <p class="text-sm font-medium tracking-[0.3em] text-amber-500 uppercase">
                    Celver Audio / Admin
                </p>
                <h1 class="mt-3 text-3xl font-semibold text-white">
                    Add Service
                </h1>
                <p class="mt-2 text-sm text-gray-400">
                    Add service information and its image URL.
                </p>
            </div>
            <a href="{{ url()->previous() }}"
               class="text-xs sm:text-sm text-neutral-400 hover:text-amber-300 border border-neutral-700 hover:border-amber-400/50 rounded-lg px-3 py-1.5 transition">
                &larr; Back
            </a>
        </div>

                                                                <!-- "multipart" untuk memberi akses laravel upload gambar file dari lokal komputer-->
        <form action="{{ route('save-layanan') }}" method="POST" enctype="multipart/form-data" 
            class="space-y-6 rounded-2xl border border-white/10 bg-[#1a1714] p-6 shadow-xl lg:p-8">
            @csrf
            <div>
                <label class="mb-2 block text-sm font-medium text-gray-200">
                    Title service
                </label>
                <input type="text" name="title"
                    value="{{ old('title') }}"
                    class="w-full rounded-lg border border-white/10 bg-[#100e0c] px-4 py-3 text-white outline-none transition focus:border-amber-500">
                @error('title')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-gray-200">
                    Description
                </label>
                <input type="text" name="description"
                    value="{{ old('description') }}"
                    class="w-full rounded-lg border border-white/10 bg-[#100e0c] px-4 py-3 text-white outline-none transition focus:border-amber-500">
                @error('description')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-gray-200">
                    Image
                </label>
                <input type="file" name="image"
                    class="w-full rounded-lg border border-white/10 bg-[#100e0c] px-4 py-3 text-white outline-none transition placeholder:text-gray-600 focus:border-amber-500">
                @error('image')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="border-t border-white/10 pt-5">
                <input type="submit" value="Add new service"
                    class="px-6 py-2.5 rounded-xl text-sm font-bold text-neutral-950 bg-amber-400 hover:bg-amber-300 shadow-[0_0_15px_rgba(251,191,36,0.3)] hover:shadow-[0_0_20px_rgba(251,191,36,0.5)] transition cursor-pointer">
            </div>

        </form>
    </div>
</section>
@endsection