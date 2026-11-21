@extends('mainLayout')

@section('content')
    <header
        class="relative w-full h-[80vh] lg:w-full lg:h-screen overflow-hidden z-30 flex flex-col justify-between items-center">

        @include('shared.navbar')

        <div class="bg-parallax absolute inset-0 w-full h-full bg-cover bg-center z-0"
            style="background-image: url('{{ asset('images/1_image.jpeg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        </div>

        <div class="absolute inset-0 bg-black/30"></div>

        <div class="relative items-center justify-center flex flex-col -top-13 lg:-top-0 my-auto z-20">
            <h2 class="relative text-[#c5c2ba] font-bold top-35 lg:top-10 text-2xl lg:text-5xl text-center">PRECISION
                INSTALLATION</h2>
            <br>
            <h2 class="relative text-[#c5c2ba] font-bold top-35 lg:top-10 text-2xl lg:text-5xl text-center">PERFORMANCE</h2>
            <br>
            <h2 class="relative text-[#c5c2ba] font-bold top-35 lg:top-10 text-2xl lg:text-5xl text-center">FOR EVERY
                MOMENTS</h2>

            <div id="intro-button" class="relative mt-40 lg:mt-20 flex justify-center">
                <a href="/explore">
                    <button
                        class="rounded-sm bg-yellow-600 px-4 py-2 lg:px-7 font-medium text-white transition hover:bg-yellow-700">
                        Explore us
                    </button>
                </a>
            </div>

        </div>

    </header>

    <main>

        <section id='serviceSection' class="relative w-full h-auto">

            <!-- Container Efek Sinar -->
            <div class="hidden lg:block absolute top-0 right-0 w-full h-full overflow-hidden pointer-events-none z-50">

                <div class="absolute -top-10 left-[15%] w-12 h-[800px] bg-gradient-to-b from-amber-300/15 via-amber-500/5 to-transparent rotate-[-40] blur-xl animate-pulse"></div>
                <div class="absolute -top-10 left-[20%] w-12 h-[550px] bg-gradient-to-b from-amber-200/50 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
                <div class="absolute -top-10 left-[23%] w-14 h-[550px] bg-gradient-to-b from-amber-200/70 via-amber-500/15 to-transparent -rotate-[-20deg] blur-2xl [animation:pulse_7s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
                <div class="absolute -top-20 left-[25%] w-12 h-[850px] bg-gradient-to-b from-amber-300/40 via-amber-400/10 to-transparen -rotate-[-30deg] blur-xl [animation:pulse_5s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
                <div class="absolute -top-10 left-[37%] w-12 h-[500px] bg-gradient-to-b from-amber-300/30 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
                <div class="absolute -top-10 left-[11%] w-22 h-[550px] bg-gradient-to-b from-amber-200/20 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg "></div>
            </div>


            <!-- Container khusus untuk img src, TEPAT dibawah ini -->
            <div class="relative w-full lg:max-w-full h-[700px] lg:h-[750px] z-20 flex-col lg:flex-row lg:pr-60">

                <img src="{{ asset('images/custom-bgColor.jpg.jpeg') }}" alt="Latar Belakang Gelap"
                    class="absolute inset-0 w-full h-full lg:w-full lg:h-full object-cover z-0 pointer-events-none drop-shadow-[0_0_8px_rgba(251,191,36,0.3)]">

                <img src="{{ asset('images/speaker_be_vibinV2.gif') }}" alt="Speaker DANCING"
                    class="absolute bottom-0 left-4 lg:left-120 w-48 lg:w-56 h-auto block object-contain z-40 pointer-events-none drop-shadow-[0_0_8px_rgba(251,191,36,0.3)]">
                <img src="{{ asset('images/speaker_be_vibin_2.gif') }}" alt="Speaker DANCING"
                    class="absolute bottom-0 left-44 lg:left-200 w-48 lg:w-56 h-auto block object-contain z-40 pointer-events-none drop-shadow-[0_0_8px_rgba(251,191,36,0.3)]">

                <!-- Container layanan -->
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-[2fr_2fr] lg:gap-12 items-center h-full w-full ">

                    <div class="flex w-fulf top-0 l h-full justify-center lg:justify-start items-end lg:items-center overflow-hidden">
                        <img src="{{ asset('images/4_image.png') }}" alt="Gambar Depan"
                            class="h-full w-auto object-contain">
                    </div>


                    <!-- Dekorasi outline kuning (speaker) -->
                    <div id='item-parallax'
                        class="absolute inset-0 rounded-4xl left-40 top-10 lg:left-160 lg:top-20 w-[6vh] h-[6vh] lg:w-[3vh] lg:h-[36vh] outline-1 outline-yellow-200/50 flex items-center justify-center">
                    </div>
                    <div id='item-parallax'
                        class="absolute inset-0 rounded-2xl left-70 top-10 lg:left-400 lg:top-130 w-[10vh] h-[10vh] lg:w-[8vh] lg:h-[8vh] outline-1 outline-yellow-200/50 flex items-center justify-center p-2">
                        <div
                            class="w-[75%] aspect-square rounded-full border border-yellow-200/50 flex items-center justify-center">
                            <div class="w-[40%] aspect-square rounded-full bg-yellow-200/40"></div>
                        </div>
                    </div>

                    <div class="lg:flex lg:flex-col justify-center gap-6 w-full h-full relative z-10">

                        <!-- judul (Atas Kanan) -->
                        <div class="absolute lg:relative -top-15 lg:top-0 lg:flex flex-col gap-2 px-6 lg:px-0">
                            <span
                                class="text-amber-400 font-semibold tracking-wider uppercase text-xs text-shadow-lg/40">Our
                                Services</span>
                            <h2 class="text-2xl lg:text-5xl font-bold text-white leading-tight text-shadow-lg/40">
                                Specialized <span class="text-amber-400">Audio Systems</span>
                            </h2>
                        </div>

                        <div class="w-full h-auto overflow-x-auto flex flex-nowrap gap-5 lg:gap-12 pb-6 snap-x snap-mandatory scrollbar-track-sky-100">

                            @foreach($layanans as $layanan)

                                <div class="relative w-72 lg:w-80 h-80 lg:h-90 mb-15 lg:mb-0 rounded-2xl overflow-hidden shrink-0 snap-start group/card border border-white/0 bg-[#2f2118] p-6 text-white backdrop-blur-sm hover:border-amber-400/40 transition-colors hover:drop-shadow-[0_0_8px_rgba(251,191,36,0.3)]">

                                    <img class="object-cover w-full h-full absolute inset-0 group-hover/card:scale-125 opacity-0 group-hover/card:opacity-100 transition-all duration-600 entered litespeed-loaded"
                                        alt="gambar1" src="{{ asset('images/' . $layanan->image) }}">

                                    <div class="absolute inset-0 bg-black/30 opacity-0 group-hover/card:opacity-100 after:absolute after:inset-0 after:bg-linear-to-t after:from-black/80"></div>

                                    <div class="absolute left-0 w-full h-full flex flex-col justify-end top-0 ">

                                        <div class="p-4 md:p-8 flex flex-col gap-1 relative z-10">
                                            <h2 class="relative font-bold shadow-2xl text-3xl text-shadow-lg/40 mb-3">
                                                {{ $layanan->title }}
                                            </h2>
                                            <p class="text-ms text-shadow-lg/60 mb-2">{{ $layanan->description }}</p>
                                        </div>

                                    </div>
                                </div>

                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
            <div class="absolute bottom-0 h-[20vh] bg-gradient-to-t w-full from-black/50 via-black/20 to-transparent z-20">
            </div>

        </section>


        <section id='achivementSection' class="relative w-full py-20 bg-[#120a06] text-white overflow-hidden">

            <div class="absolute top-1/2 -right-20 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none">
            </div>

            <div class="max-w-7xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">

                <div class="lg:col-span-5 flex flex-col justify-center">
                    <span class="text-amber-400 font-semibold tracking-wider uppercase text-xs mb-2">Track Record</span>
                    <h2 class="text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                        Our <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 via-amber-400 to-amber-600">Achievements</span>
                    </h2>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Menyediakan konfigurasi sistem audio tingkat profesional dengan presisi akustik tinggi untuk
                        berbagai
                        skala acara dan tempat eksklusif.
                    </p>
                </div>


                <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($achivements as $achievement)
                        <div
                            class="p-6 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-sm hover:border-amber-400/40 hover:drop-shadow-[0_0_8px_rgba(251,191,36,0.3)] hover:bg-white/10 transition-all duration-300 group hover:-translate-y-1 {{ ($loop->iteration % 3 == 0) ? 'sm:col-span-2' : '' }}">
                            <div
                                class="text-4xl lg:text-5xl font-black text-amber-400 mb-2 group-hover:scale-105 transition-transform origin-left">
                                {{ $achievement->titleDesc }}
                            </div>
                            <h3 class="text-lg font-bold text-white mb-2">{{ $achievement->subTitleDesc }}</h3>
                            <p class="text-xs text-gray-300 leading-relaxed">
                                {{ $achievement->desc }}
                            </p>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    </main>

     <!-- Masih nunggu client -->
    <footer class="relative w-full h-screen text-neutral-300 pt-16 pb-8 font-sans overflow-hidden border-t border-amber-900/30">
    
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/footerBg.jpeg') }}" alt="Footer Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-neutral-950/90 backdrop-blur-sm"></div>
    </div>

        <div class="relative z-10 container mx-auto px-6 lg:px-12 max-w-7xl">

            <div
                class="flex flex-col w-full items-center text-center text-xs text-neutral-500 border-t border-neutral-800/80 pt-6">
                <p>&copy; 2026 Celver Audio. All rights reserved.</p>
            </div>

            <div class="absolute w-full justify-center items-center mt-20 lg:mt-20 pointer-events-none select-none">
                <h1 class="text-[20vw] lg:text-[10vw] font-extrabold leading-none tracking-tighter"
                    style="-webkit-text-stroke: 1px rgba(251, 191, 36, 0.25); color: transparent;">
                    CELVER AUDIO
                </h1>
            </div>

        </div>
    </footer>

    </body>


@endsection