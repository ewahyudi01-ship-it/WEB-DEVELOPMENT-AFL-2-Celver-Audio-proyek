
<div class="pointer-events-none absolute inset-x-0 -top-100 z-10
                h-40 bg-linear-to-b from-black/20
                via-black/30 to-transparent ">
    </div>

<nav class="fixed z-60 w-full h-[10vh] text-white bg-linear-to-b from-black/70 via-black/50 to-transparent py-5">
    <div class="absolute inset-0 top-7 lg:top-1">
        <div class="flex justify-between mx-auto w-full max-w-8xl items-center px-5 lg:px-30">

            <a href="/" class="relative flex items-center">
                <div class="flex items-center z-40 w-full">
                    <img src="{{ asset('images/Celver-Audio.png') }}" alt="Celver Audio" class="w-35 lg:w-50 ">
                </div>
            </a>

            <div class="hidden lg:flex justify-end gap-4 lg:gap-10 text-ms lg:text-[18px]">
                <a href="{{ route('home-route') }}#serviceSection" class="font-[Outfit] text-shadow-lg hover:text-yellow-500 transition-all duration-200 ease-out">Service</a>
                <a href="{{ route('home-route') }}#achivementSection" class="font-[Outfit] text-shadow-lg hover:text-yellow-500 transition-all duration-200 ease-out">Achivements</a>
                <a href="{{ route('about-route') }}" class="font-[Outfit] text-shadow-lg hover:text-yellow-500 transition-all duration-200 ease-out">About</a>
                <a href="{{ route('contact-route') }}#contactSection" class="font-[Outfit] text-shadow-lg hover:text-yellow-500 transition-all duration-200 ease-out">Contact</a>
            </div>

             <details class="relative lg:hidden">
            <summary class="list-none cursor-pointer text-3xl px-2">
                ☰
            </summary>

            <div class="absolute right-0 top-full mt-4 w-48 rounded-xl border border-white/10 bg-[#e1e0df] shadow-xl p-5">

                <div class="flex flex-col gap-5 text-sm">
                    <a href="{{ route('home-route') }}#serviceSection"
                       class="text-black hover:text-yellow-500">
                        Service
                    </a>

                    <a href="{{ route('home-route') }}#achivementSection"
                       class="text-black hover:text-yellow-500">
                        Achievements
                    </a>

                    <a href="/explore"
                       class="text-black hover:text-yellow-500">
                        About
                    </a>

                    <a href="{{ route('contact-route') }}#contactSection"
                       class="text-black hover:text-yellow-500">
                        Contact
                    </a>
                </div>
            </div>
        </details>
        </div>
    </div>
</nav>