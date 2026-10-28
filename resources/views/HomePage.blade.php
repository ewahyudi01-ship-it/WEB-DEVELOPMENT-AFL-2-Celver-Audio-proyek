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

            <div class="absolute inset-0 z-10 flex items-center justify-start">
            <img
                src="{{ asset('images/3_image.png') }}"
                alt="Gambar Depan"
                class="h-full w-auto object-cover">
            </div>
        </section>
       
        <section>
            <!-- Layanan atau produk -->

        </section>
    </main>

    <footer>
        <!-- Kontak dan copyright -->

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