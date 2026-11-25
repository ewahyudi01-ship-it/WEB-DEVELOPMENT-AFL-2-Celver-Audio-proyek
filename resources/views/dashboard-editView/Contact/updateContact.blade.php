@extends('mainLayout')

@section('content')
<section class="min-h-screen w-full bg-neutral-950 text-white py-12 px-4 sm:px-6 flex items-center justify-center">

    <div class="absolute inset-0">
        @include('shared.navbar')
    </div>


    <div class="w-full max-w-2xl bg-neutral-900/90 backdrop-blur-md border border-amber-500/20 rounded-2xl shadow-2xl p-6 sm:p-10">
        <div class="border-b border-neutral-800 pb-5 mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-xl sm:text-2xl font-bold text-amber-400 tracking-wide">
                    Update Contact
                </h1>
                <p class="text-xs sm:text-sm text-neutral-400 mt-1">
                    Modify your contact information.
                </p>
            </div>

            <a href="{{ url()->previous() }}"
               class="text-xs sm:text-sm text-neutral-400 hover:text-amber-300 border border-neutral-700 hover:border-amber-400/50 rounded-lg px-3 py-1.5 transition">
                &larr; Back
            </a>
        </div>

        <form action="{{ route('update-contact', $contact) }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-medium text-neutral-200 mb-1.5">
                    WhatsApp <span class="text-amber-400">*</span>
                </label>

                <input type="text" name="whatsapp"
                    value="{{ old('whatsapp', $contact->whatsapp) }}"
                    placeholder="Enter WhatsApp number"
                    class="w-full rounded-xl bg-neutral-950/80 border @error('whatsapp') border-red-500 @else border-neutral-700 @enderror px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition">

                @error('whatsapp')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-neutral-200 mb-1.5">
                    Gmail <span class="text-amber-400">*</span>
                </label>

                <input type="text" name="gmail"
                    value="{{ old('gmail', $contact->gmail) }}"
                    placeholder="Enter Gmail address"
                    class="w-full rounded-xl bg-neutral-950/80 border @error('gmail') border-red-500 @else border-neutral-700 @enderror px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition">

                @error('gmail')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-neutral-200 mb-1.5">
                    Location <span class="text-amber-400">*</span>
                </label>

                <input type="text" name="lokasi"
                    value="{{ old('lokasi', $contact->lokasi) }}"
                    placeholder="Enter business location"
                    class="w-full rounded-xl bg-neutral-950/80 border @error('lokasi') border-red-500 @else border-neutral-700 @enderror px-4 py-2.5 text-sm text-white placeholder-neutral-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition">

                @error('lokasi')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 flex items-center justify-end gap-3 border-t border-neutral-800">
                <a href="{{ url()->previous() }}"
                   class="px-5 py-2.5 rounded-xl text-sm font-medium text-neutral-300 hover:text-white bg-neutral-800 hover:bg-neutral-700 transition">
                    Cancel
                </a>

                <button type="submit"
                    class="px-6 py-2.5 rounded-xl text-sm font-bold text-neutral-950 bg-amber-400 hover:bg-amber-300 shadow-[0_0_15px_rgba(251,191,36,0.3)] hover:shadow-[0_0_20px_rgba(251,191,36,0.5)] transition cursor-pointer">
                    Update Data
                </button>
            </div>

        </form>
    </div>
</section>
@endsection