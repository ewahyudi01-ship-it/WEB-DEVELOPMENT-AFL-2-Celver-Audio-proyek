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
    <header>
        
            <!-- Logo, navbar dan menunya -->
    <div class="pointer-events-none absolute inset-x-0 -top-10 z-10
                h-40 bg-linear-to-b from-black
                via-black/60 to-transparent">
    </div>

        @include('shared.navbar')

        <section class="hero-banner background-adjust-mobile bg-parallax"></section>
        <div class="absolute inset-0 z-[1] bg-black/20"></div>

        <div id="logo-intro" class="absolute inset-0 z-40 -top-100 lg:-top-50 flex items-center justify-center">
            <img src="{{ asset('images/Celver Audio.png') }} "alt="Logo" class="w-40 md:w-56">
        </div>
        
        <div class ="absolute inset-0 items-center justify-center flex z-20"> 
            <h2 class ="relative text-white font-bold -top-10 lg:top-10 text-2xl lg:text-4xl text-shadow-[2px_2px_6px_rgba(0,0,0,0.3)] text-center"><?= $tagLine; ?></h2>
        </div>
       

    </header>

    <main>

  
        <section>
            <!-- Rekam jejak section -->

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
        y: "30%", // Menggeser div background sebesar 20% dari tingginya seiring scroll
        ease: "none",
        scrollTrigger: {
            trigger: ".bg-parallax",
            start: "top",
            end: "bottom top",
            scrub: 1 // Nilai 1 membuat efeknya terasa 'membal' halus (smooth catch-up)
        }
    });

</script>
</html>