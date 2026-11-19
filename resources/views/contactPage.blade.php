@extends('mainLayout')

@section('content')

<div class="relative w-full overflow-hidden bg-[#090909]">

    <div class="absolute inset-0">
        @include('shared.navbar')
    </div>

    <!-- Warm ambient lighting -->
    <div class="absolute top-0 left-0 w-80 h-80 bg-amber-500/10 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-96 h-80 bg-yellow-700/10 blur-[140px] rounded-full pointer-events-none"></div>

    <div class="relative w-full h-[20vh] lg:h-[34vh] overflow-hidden">
            <img src="{{ asset('images/8_image.jpeg') }}"
                 class="w-full h-full object-cover pointer-events-none scenery-reveal"
                 alt="pemandangan">

        <div class="absolute inset-0 flex items-center justify-center bg-black/40">
            <h3 class="text-white text-2xl lg:text-5xl font-semibold tracking-[8px]">CONTACT</h3>
        </div>

    </div>

    <!-- Main -->
    <div class="relative flex-1 z-10 max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center px-6 py-20 lg:px-24 lg:py-28">

        <div class="flex flex-col gap-10">
            <div class="space-y-5">

                <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-light tracking-wide leading-tight">
                    How can we <br>
                    <span class="text-amber-400">help?</span>
                </h1>

                <p class="text-gray-400 text-sm md:text-base leading-relaxed max-w-md">
                    Have something in mind? Feel free to reach
                    out to us. We would love to hear from you
                    and help with your needs.
                </p>
            </div>

            <div class="border-l border-amber-500/40 pl-6
                        flex flex-col gap-7">

                <div class="space-y-2">
                    <p class="text-amber-500/70 text-xs tracking-[3px]">EMAIL</p>
                    <p class="text-gray-200 text-sm md:text-base">
                        {{ $contacts->gmail }}
                    </p>
                </div>

                <div class="space-y-2">
                    <p class="text-amber-500/70 text-xs tracking-[3px]">LOCATION</p>
                    <p class="text-gray-200 text-sm md:text-base">
                        {{ $contacts->lokasi }}
                    </p>
                </div>

                <div class="space-y-2">
                    <p class="text-amber-500/70 text-xs tracking-[3px]">PHONE</p>
                    <p class="text-gray-200 text-sm md:text-base">
                        {{ $contacts->whatsapp }}
                    </p>
                </div>

            </div>
        </div>


    <div class="relative">
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-amber-500/10 blur-[80px] rounded-full"></div>
            <div class="relative bg-[#14120F]/90 border border-amber-500/20 rounded-2xl p-7 md:p-10 shadow-[0_20px_80px_rgba(0,0,0,0.4)]">

                <div class="mb-8 space-y-3">
                    <p class="text-amber-500 text-xs tracking-[4px] font-semibold">
                        CONTACT US
                    </p>

                    <h2 class="text-2xl md:text-3xl text-white font-medium">Let's talk.</h2>

                    <p class="text-gray-500 text-sm">
                        Tell us what is on your mind.
                    </p>
                </div>

                <form action="{{ route('submit-message') }}" method="POST" class="flex flex-col gap-6">
                    @csrf
                    <div class="space-y-3">
                        <label class="text-gray-400 font-bold text-xs tracking-wider">
                            YOUR MESSAGE
                        </label>

                        <input type="text" name="description" value="{{ old('description') }}" placeholder="Type here..."
                        class="w-full h-40 p-4 text-amber-400/90 border rounded-lg border-t border-amber-500/30 focus:outline-none" required>
                        @error('description')
                            <p class="error">{{ $message }}</p>
                        @enderror

                    </div>

                    <button type="submit" class="group relative overflow-hidden w-full py-4 rounded-xl bg-gradient-to-r from-[#A77B32] to-[#D5AE68] text-[#17120A] font-semibold tracking-[2px] text-xs transition-all duration-300 hover:shadow-[0_0_30px_rgba(212,168,85,0.2)] hover:brightness-110">

                        <span class="relative z-10 transition-transform duration-300 group-hover:tracking-[3px]">
                            SUBMIT MESSAGE
                            <span class="ml-2">↗</span>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>

@endsection