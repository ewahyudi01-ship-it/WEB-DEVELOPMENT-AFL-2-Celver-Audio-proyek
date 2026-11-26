@extends('mainLayout')

@section('content')

    <div class="absolute top-0">
        @include('shared.navbar')
    </div>

<section class="min-h-screen bg-[#100e0c]  pt-35 py-16 lg:pt-50">

    <div class="relative ">
        @include('shared.backgroundDashboard')
    </div>

    <div class=" mx-auto max-w-2xl">

        <div class="mb-8">
            <p class="text-sm font-medium tracking-[0.3em] text-amber-500 uppercase">
                Celver Audio / Admin
            </p>
            <h1 class="mt-3 text-3xl font-semibold text-white">
                Add Portfolio
            </h1>
            <p class="mt-2 text-sm text-gray-400">
                Add portfolio information and its image URL.
            </p>
        </div>



        <form action="{{ route('save-portfolio') }}" method="POST" enctype="multipart/form-data"
            class="space-y-6 rounded-2xl border border-white/10 bg-[#1a1714] p-6 shadow-xl lg:p-8">
            @csrf
            <div>
                <label class="mb-2 block text-sm font-medium text-gray-200">
                    Title Place
                </label>
                <input type="text" name="titlePlace"
                    value="{{ old('titlePlace') }}"
                    class="w-full rounded-lg border border-white/10 bg-[#100e0c] px-4 py-3 text-white outline-none transition focus:border-amber-500">
                @error('titlePlace')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-gray-200">
                    Description Place
                </label>
                <input type="text" name="descriptionPlace"
                    value="{{ old('descriptionPlace') }}"
                    class="w-full rounded-lg border border-white/10 bg-[#100e0c] px-4 py-3 text-white outline-none transition focus:border-amber-500">
                @error('descriptionPlace')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-gray-200">
                    Image
                </label>
                <input type="file" name="image" accept="image/*"
                    class="w-full rounded-lg border border-white/10 bg-[#100e0c] px-4 py-3 text-white outline-none transition placeholder:text-gray-600 focus:border-amber-500">
                @error('image')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="border-t border-white/10 pt-5">
                <input type="submit" value="Add new portfolio"
                    class="px-6 py-2.5 rounded-xl text-sm font-bold text-neutral-950 bg-amber-400 hover:bg-amber-300 shadow-[0_0_15px_rgba(251,191,36,0.3)] hover:shadow-[0_0_20px_rgba(251,191,36,0.5)] transition cursor-pointer">
            </div>

        </form>
    </div>
</section>
@endsection