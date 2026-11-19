@extends('mainLayout')

@section('content')

    <section id="contactSection" class="min-h-screen flex flex-col items-center justify-center overflow-x-hidden">

        <div class="fixed top-0 left-0 w-full z-50">
            @include('shared.navbar')
        </div>

        <div class="relative w-full h-[20vh] lg:h-[34vh] overflow-hidden">
            <img src="{{ asset('images/8_image.jpeg') }}"
                 class="w-full h-full object-cover pointer-events-none scenery-reveal"
                 alt="pemandangan">

            <div class="absolute inset-0 flex items-center justify-center bg-black/40">
                <h3 class="text-white text-2xl lg:text-5xl font-semibold tracking-[8px]">CONTACT</h3>
            </div>
        </div>

        <div class="relative flex w-full min-h-screen mt-15 lg:mt-40">
            <img src="{{ asset('images/Banner_Contact.jpeg') }}"
            id="intro-contact-banner" class="bg-parallax w-full h-full object-cover pointer-events-none" alt="pemandangan">
        </div>

        <div class="absolute w-full md:px-100 lg:-bottom-80 flex flex-col items-end justify-end gap-12 border-r border-amber-500/40 px-10">
            <div class="w-full text-right bottom-20 lg:bottom-0">
                <div class="space-y-2 text-xs md:text-base text-amber-400/60">
                    <p>Email: {{ $contacts->gmail }}</p>
                    <p>Lokasi: {{ $contacts->lokasi }}</p>
                    <p>Telepon: {{ $contacts->whatsapp }}</p>
                </div>
            </div>

        <div class="relative flex flex-col items-end justify-end w-full h-full">
            <h1 class="text-sm text-amber-500 font-bold tracking-[6px]">
                CONTACT US
            </h1>    
            <h1 class="text-3xl text-white tracking-wide mt-5">
                How can we help?
            </h1>  
        </div>


            <form action="{{ route('save-laptop') }}" method="POST" class="w-full max-w-lg flex flex-col gap-4">
                @csrf
                <textarea name="feedback" placeholder="Type here..."
                    class="w-full h-40 p-4 text-amber-400/90 border rounded-lg border-t border-amber-500/30 focus:outline-none" required></textarea>

                <button type="submit" class="bg-blue-600/70 hover:bg-green-700 transition-all duration-200 ease-out text-white py-3 rounded-2xl">
                    Submit
                </button>

            </form>
        </div>

    </section>

@endsection