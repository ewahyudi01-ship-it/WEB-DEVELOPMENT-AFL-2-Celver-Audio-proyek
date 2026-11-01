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
<body>
    <header class="relative w-full h-[80vh] lg:w-full lg:h-auto overflow-hidden z-10">

        @include('shared.navbar')

    <picture>
        <img
            src="{{ asset('images/1_image.jpeg') }}"
            alt="Celver Audio"
            class="bg-parallax w-full object-cover h-full lg:w-full lg:h-auto">
    </picture>

        <div class="absolute inset-0 z-[1] bg-black/20 "></div>

        <div id="intro-logo" class="absolute inset-0 z-40 lg:-top-50 flex items-center justify-center">
            <img src="{{ asset('images/Celver Audio.png') }} "alt="Logo" class="w-40 md:w-56">
            
        </div>
        
        <div id="intro" class ="absolute inset-0 items-center justify-center flex z-20"> 
            <h2 class ="relative text-white font-bold top-35 lg:top-10 text-2xl lg:text-4xl text-shadow-[2px_2px_6px_rgba(0,0,0,0.3)] text-center"><?= $tagLine; ?></h2>
        </div>
        

    </header>

    <main>
        
         <section class="relative w-full h-[500px] lg:min-h-[750px] overflow-hidden z-20">
            <img
                src="{{ asset('images/custom-bgColor.jpg.jpeg') }}"
                alt="Latar Belakang Gelap"
                class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 z-10 flex items-center justify-between w-full h-full">
    
    <!-- Bagian Kiri: Gambar Tanaman -->
    <img
        src="{{ asset('images/3_image.png') }}"
        alt="Gambar Depan"
        class="h-full w-auto object-cover">

    <!-- Bagian Kanan: Teks Achievement -->
    <div class="flex flex-col justify-center w-full lg:w-1/2 p-6 lg:pr-16 text-left">
    <h2 class="text-4xl lg:text-6xl font-bold text-white mb-8 lg:mb-12 tracking-wide drop-shadow-lg">
        Our <span class="text-amber-400">Achievements</span>
    </h2>

    <div class="space-y-6 lg:space-y-10">
        <div class="border-l-4 border-amber-400 pl-6 transform hover:translate-x-2 transition duration-300">
            <h3 class="text-xl lg:text-3xl font-semibold text-amber-300">5+ Tahun Pengalaman</h3>
            <p class="text-neutral-300 mt-2 text-sm lg:text-lg leading-relaxed">
                Pelayanan instalasi sound system profesional untuk night club, acara perkawinan, dan live music cafe.
            </p>
        </div>

        <div class="border-l-4 border-amber-400 pl-6 transform hover:translate-x-2 transition duration-300">
            <h3 class="text-xl lg:text-3xl font-semibold text-amber-300">Atlas Beach Club Bali</h3>
            <p class="text-neutral-300 mt-2 text-sm lg:text-lg leading-relaxed">
                Portfolio utama dalam perencanaan, instalasi, dan maintenance sound system di salah satu club terbesar.
            </p>
        </div>

        <div class="border-l-4 border-amber-400 pl-6 transform hover:translate-x-2 transition duration-300">
            <h3 class="text-xl lg:text-3xl font-semibold text-amber-300">Efisiensi & Kualitas</h3>
            <p class="text-neutral-300 mt-2 text-sm lg:text-lg leading-relaxed">
                Menguasai penataan audio menurut kontur ruangan, memberikan pembiayaan efektif serta garansi troubleshooting.
            </p>
        </div>
    </div>
</div>

</div>

        </section>
       
        <section>
            

        </section>
    </main>


    <!-- Masih nunggu client -->
    <footer class="relative w-full text-neutral-300 pt-16 pb-8 font-sans overflow-hidden border-t border-amber-900/30">
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/custom-bgColor.jpg.jpeg') }}" alt="Footer Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-neutral-950/80 backdrop-blur-sm"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 lg:px-12 max-w-7xl">
        
        <div class="flex flex-col md:flex-row justify-between gap-12 mb-16 border-t border-amber-500/10 pt-10">
            
            <div class="md:w-1/2">
                <h3 class="text-amber-400 text-xl font-bold mb-4">About Us</h3>
                <p class="text-neutral-400 leading-relaxed text-sm">
                    Kami bergerak di bidang pelayanan instalasi sound system profesional. Berpengalaman lebih dari 5 tahun dalam perencanaan, instalasi, dan maintenance untuk berbagai acara lokal, night club, cafe, hingga home sound system.
                </p>
            </div>

            <div class="md:w-1/3 md:text-right">
                <h3 class="text-amber-400 text-xl font-bold mb-4">Contact</h3>
                <div class="space-y-2 text-sm text-neutral-400">
                    <p>Email: admin@celveraudio.web.id</p>
                    <p>Lokasi: Surabaya, Indonesia</p>
                    <p>Telepon: +62 812-3456-7890</p>
                </div>
            </div>

        </div>

        <div class="flex flex-col md:flex-row justify-between items-center text-xs text-neutral-500 border-t border-neutral-800/80 pt-6">
            
            <p>&copy; 2026 Celver Audio. All rights reserved.</p>
        </div>

    </div>
</footer>
</body>
<script>
    gsap.registerPlugin(ScrollTrigger);

      gsap.to(".bg-parallax", {
        y: "20%", // Menggeser div background sebesar 20% dari tingginya seiring scroll
        ease: "none",
        scrollTrigger: {
            trigger: ".bg-parallax",
            start: "top",
            end: "bottom top",
            scrub: 1 // Nilai 1 membuat efeknya terasa 'membal' halus (smooth catch-up)
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