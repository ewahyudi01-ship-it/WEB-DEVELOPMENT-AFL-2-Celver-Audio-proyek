@extends('mainLayout')

@section('content')
<section class="min-h-screen w-full bg-neutral-950 text-white py-12 px-4 sm:px-6 flex items-center justify-center">

    <div class="absolute inset-0">
        @include('shared.navbar')
    </div>

    
    <div class="w-full max-w-2xl bg-neutral-900/90 backdrop-blur-md border border-amber-500/20 rounded-2xl shadow-2xl p-6 sm:p-10">

        <!-- Header Form -->
        <div class="border-b border-neutral-800 pb-5 mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-xl sm:text-2xl font-bold text-amber-400 tracking-wide">
                    Update Achievement
                </h1>
                <p class="text-xs sm:text-sm text-neutral-400 mt-1">
                    Modify achievement information displayed on your website.
                </p>
            </div>

            <a href="{{ route('list-achivement-route') }}"
               class="text-xs sm:text-sm text-neutral-400 hover:text-amber-300 border border-neutral-700 hover:border-amber-400/50 rounded-lg px-3 py-1.5 transition">
                &larr; Back
            </a>
        </div>

        <form action="{{ route('update-achivement', $achivement) }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-medium text-neutral-200 mb-1.5">
                    Title Description <span class="text-amber-400">*</span>
                </label>

                <input type="text" name="titleDesc"
                    value="{{ old('titleDesc', $achivement->titleDesc) }}"
                    placeholder="Enter achievement title"
                    class="w-full rounded-xl bg-neutral-950/80 border @error('titleDesc') border-red-500 @else border-neutral-700 @enderror px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition">

                @error('titleDesc')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-neutral-200 mb-1.5">
                    Subtitle Description
                </label>

                <input type="text" name="subTitleDesc"
                    value="{{ old('subTitleDesc', $achivement->subTitleDesc) }}"
                    placeholder="Enter achievement subtitle"
                    class="w-full rounded-xl bg-neutral-950/80 border @error('subTitleDesc') border-red-500 @else border-neutral-700 @enderror px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition">

                @error('subTitleDesc')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-neutral-200 mb-1.5">
                    Description <span class="text-amber-400">*</span>
                </label>

                <textarea name="desc" rows="4"
                    placeholder="Write achievement description here..."
                    class="w-full rounded-xl bg-neutral-950/80 border @error('desc') border-red-500 @else border-neutral-700 @enderror px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition">{{ old('desc', $achivement->desc) }}</textarea>

                @error('desc')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 flex items-center justify-end gap-3 border-t border-neutral-800">
                <button type="submit"
                    class="px-6 py-2.5 rounded-xl text-sm font-bold text-neutral-950 bg-amber-400 hover:bg-amber-300 shadow-[0_0_15px_rgba(251,191,36,0.3)] hover:shadow-[0_0_20px_rgba(251,191,36,0.5)] transition cursor-pointer">
                    Update Data
                </button>
            </div>

        </form>
    </div>
</section>
@endsection