
<div class="pointer-events-none absolute inset-x-0 -top-100 z-10
                h-40 bg-linear-to-b from-black/20
                via-black/30 to-transparent ">
    </div>

<nav class="fixed z-60 w-full h-[10vh] text-white bg-linear-to-b from-black/70 via-black/40 to-transparent py-5">
    <div class="absolute inset-0 top-7 lg:top-1">
        <div class="flex justify-center mx-auto w-full max-w-8xl grid grid-cols-2 items-center px-5 lg:px-30">

            <a href="/" class="relative flex items-center">
                <div class="flex items-center z-40 w-full">
                    <img src="{{ asset('images/Celver-Audio.png') }}" alt="Celver Audio" class="w-35 lg:w-50 ">
                </div>
            </a>

            <div class="flex justify-end gap-4 lg:gap-10 text-ms lg:text-xl">
                <a href="{{ route('home-route') }}#achivementSection" class="font-[Outfit] hover:text-yellow-500 transition-all duration-200 ease-out">Achivements</a>
                <a href="/explore" class="font-[Outfit] hover:text-yellow-500 transition-all duration-200 ease-out">About</a>
                <a href="{{ route('home-route') }}#contactSection" class="font-[Outfit] hover:text-yellow-500 transition-all duration-200 ease-out">Contact</a>
            </div>
        </div>
    </div>
</nav>