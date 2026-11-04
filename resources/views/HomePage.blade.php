<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <title>Document</title>
</head>
<body class="bg-[rgb(11,11,11)]">
    <header class="relative w-full h-[80vh] lg:w-full lg:h-auto overflow-hidden z-30">

        @include('shared.navbar')

        <img
            src="{{ asset('images/1_image.jpeg') }}"
            alt="Celver Audio"
            class="bg-parallax w-full object-cover h-full lg:w-full lg:h-auto">

        <div class="absolute inset-0 bg-black/20 "></div>
        
        <div id="intro" class ="absolute inset-0 items-center justify-center flex flex-col -top-75 lg:-top-25 z-20"> 
            @foreach($taglines as $tagLine)
            <h2 class ="relative text-white font-bold top-35 lg:top-10 text-2xl lg:text-4xl text-shadow-lg/30 text-center"><?= $tagLine->text; ?></h2>
            <br>
            @endforeach
        </div>
       

    </header>

    <main>
        
    <section class="relative w-full lg:max-w-full h-[1000px] lg:h-[750px] z-20 flex-col lg:flex-row lg:pr-60">
        <img
            src="{{ asset('images/custom-bgColor.jpg.jpeg') }}"
            alt="Latar Belakang Gelap"
            class="absolute inset-0 w-full h-full object-cover z-0">

    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-[2fr_1fr_1fr] lg:gap-12 items-center h-full w-full ">
        
        <div class="flex w-full h-full justify-center lg:justify-start items-center overflow-hidden">
            <img
                src="{{ asset('images/3_image.png') }}"
                alt="Gambar Depan"
                class="h-full w-auto object-contain">
        </div>

        <div id='item-parallax'class="absolute inset-0 rounded-4xl left-40 top-10 lg:left-160 lg:top-20 w-[6vh] h-[6vh] lg:w-[6vh] lg:h-[36vh] outline-2 outline-yellow-200/50 flex items-center justify-center"></div>
        <div id='item-parallax'class="absolute inset-0 rounded-4xl left-10 top-10 lg:left-250 lg:top-30 w-[4vh] h-[16vh] lg:w-[20vh] lg:h-[13vh] outline-2 outline-yellow-200/50 flex items-center justify-center"></div>
        <div id='item-parallax'class="absolute inset-0 rounded-4xl left-70 top-10 lg:left-410 lg:top-130 w-[10vh] h-[10vh] lg:w-[6vh] lg:h-[6vh] outline-2 outline-yellow-200/50 flex items-center justify-center"></div>

        @foreach($layanans as $layanan)
        <div class="w-full">
            <div class="w-full rounded-2xl overflow-hidden flex flex-col h-90 relative bg-black/50 group/card border border-white/10 p-6 text-white backdrop-blur-sm">
                <img class="object-cover w-full h-full absolute inset-0 group-hover/card:scale-125 transition-transform duration-300 entered litespeed-loaded"
                alt="gambar1"
                src="{{ asset('images/' . $layanan->image) }}">
                
                <div class="absolute left-0 w-full bottom-0 after:absolute after:inset-0 after:bg-gradient-to-t after:from-black/80 ">
                    <div class="p-4 md:p-8 flex flex-col gap-1 relative z-10">
                        <h2 class="font-bold shadow-xl text-3xl text-shadow-lg/40 mb-2">{{ $layanan->title }}</h2>
                        <p class="text-xs text-shadow-lg/30 mb-2">{{ $layanan->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        

    </div>

    </section>
    
        <section class ="relative grid grid-cols-2 w-full">
             <div class="flex flex-col justify-center w-full lg:w-full lg:pr-16 text-left lg:mx-45 my-30">
                <h2 class="text-4xl lg:text-6xl font-bold text-white mb-8 lg:mb-12 tracking-wide drop-shadow-lg">
                    Our <span class="text-amber-400">Achievements</span>
                </h2>

                <div class="space-y-6 lg:space-y-10">
                    <div class="border-l-4 border-amber-400 pl-6 transform hover:translate-x-2 transition duration-300">
                        <h3 class="text-xl lg:text-3xl font-semibold text-amber-300">10+ Years of Experience</h3>
                        <p class="text-neutral-300 mt-2 text-sm lg:text-lg leading-relaxed">
                            {{ $achivements->yearsDesc }}
                        </p>
                    </div>

                    <div class="border-l-4 border-amber-400 pl-6 transform hover:translate-x-2 transition duration-300">
                        <h3 class="text-xl lg:text-3xl font-semibold text-amber-300">Trusted for High-Stakes Events</h3>
                        <p class="text-neutral-300 mt-2 text-sm lg:text-lg leading-relaxed">
                            {{ $achivements->trustedDesc }}
                        </p>
                    </div>

                    <div class="border-l-4 border-amber-400 pl-6 transform hover:translate-x-2 transition duration-300">
                        <h3 class="text-xl lg:text-3xl font-semibold text-amber-300">Efficiency & Quality</h3>
                        <p class="text-neutral-300 mt-2 text-sm lg:text-lg leading-relaxed">
                            {{ $achivements->expertiseDesc }}
                        </p>
                    </div>
                </div>
            </div>
                

            <div class="flex justify-center items-center w-full h-full">
                <img src="{{ asset('images/2_image.png') }}"
                alt="gambar2"
                id ="item-parallax-2" class="absolute w-35 lg:w-110 bottom-50 object-cover z-0">
            </div>
        
        </section>
    </main>

    <footer class="relative w-full h-screen text-neutral-300 pt-16 pb-8 font-sans overflow-hidden border-t border-amber-900/30">
    
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/footerBg.jpeg') }}" alt="Footer Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-neutral-950/90 backdrop-blur-sm"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 lg:px-12 max-w-7xl">
        
        <div class="flex flex-col md:flex-row justify-between gap-12 mb-16 border-t border-amber-500/10 pt-10">

            <div id="aboutSection" class="md:w-1/2">
                <h3 class="text-amber-400 text-xl font-bold mb-4">About Us</h3>
                <p class="text-neutral-400 leading-relaxed text-sm">
                   {{ $abouts->aboutUsDesc }}
            </div>

            
            <div id="contactSection" class="md:w-1/3 md:text-right">
                <h3 class="text-amber-400 text-xl font-bold mb-4">Contact</h3>
                <div class="space-y-2 text-sm text-neutral-400">
                    <p>Email: {{ $contacts->gmail }}</p>
                    <p>Lokasi: {{ $contacts->lokasi }}</p>
                    <p>Telepon: {{ $contacts->whatsapp }}</p>
                </div>
            </div>

        </div>

        <div class="flex flex-col md:flex-row justify-between items-center text-xs text-neutral-500 border-t border-neutral-800/80 pt-6">
            <p>&copy; 2026 Celver Audio. All rights reserved.</p>
        </div>

        <div class="absolute justify-center items-center mt-20 lg:mt-20 pointer-events-none select-none">
            <h1 class="text-[20vw] lg:text-[10vw] font-extrabold leading-none tracking-tighter" 
                style="-webkit-text-stroke: 1px rgba(251, 191, 36, 0.25); color: transparent;">
                CELVER AUDIO
            </h1>
        </div>

    </div>
</footer>

</body>
<script>
    gsap.registerPlugin(ScrollTrigger);

      gsap.to(".bg-parallax", {
        y: "15%", 
        ease: "none",
        scrollTrigger: {
            trigger: ".bg-parallax",
            start: "top",
            end: "bottom top",
            scrub: 1 
        }
    });

    gsap.to("#item-parallax", {
        y: "55%", 
        ease: "none",
        scrollTrigger: {
            trigger: ".bg-parallax",
            start: "top",
            end: "bottom top",
            scrub: 1 
        }
    });


    gsap.to("#item-parallax-2", {
        y: "25%", 
        ease: "none",
        scrollTrigger: {
            trigger: ".bg-parallax",
            start: "top",
            end: "bottom top",
            scrub: 1 
        }
    });

    gsap.from("#intro-logo", {
        y: 20,
        opacity: 1,
        duration: 2
    });

        gsap.from("#intro", {
        y: 50,
        opacity: 0,
        duration: 2
    });


</script>
</html>