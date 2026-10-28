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

    <footer class="relative w-full text-neutral-300 pt-16 pb-8 font-sans overflow-hidden border-t border-amber-900/30">
    <!-- Background Image dengan Overlay Gelap agar Gradasi Menyambung -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <img src="{{ asset('images/custom-bgColor.jpg.jpeg') }}" alt="Footer Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-neutral-950/80 backdrop-blur-sm"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 lg:px-12 max-w-7xl">
        
        <!-- Bagian Atas: 4 Kolom Navigasi & Newsletter -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16 border-t border-amber-500/10 pt-10">
            
            <!-- Kolom 1: Products -->
            <div>
                <h3 class="text-amber-400 text-lg font-medium mb-6">Products</h3>
                <ul class="space-y-3 text-sm tracking-wide text-neutral-400">
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Celver Platform</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Audio Engine</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Sound Library</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Integrations</a></li>
                </ul>
            </div>

            <!-- Kolom 2: Resources -->
            <div>
                <h3 class="text-amber-400 text-lg font-medium mb-6">Resources</h3>
                <ul class="space-y-3 text-sm tracking-wide text-neutral-400">
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Blog</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Guides</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Documentation</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Community</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Company -->
            <div>
                <h3 class="text-amber-400 text-lg font-medium mb-6">Company</h3>
                <ul class="space-y-3 text-sm tracking-wide text-neutral-400">
                    <li><a href="/about" class="hover:text-amber-300 transition-colors">About Us</a></li>
                    <li><a href="/project" class="hover:text-amber-300 transition-colors">Our Projects</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Careers</a></li>
                    <li><a href="#" class="hover:text-amber-300 transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Kolom 4: Newsletter -->
            <div>
                <h3 class="text-amber-400 text-lg font-medium mb-6">Sign up for our newsletter to stay up to date</h3>
                <form class="flex flex-col gap-4">
                    <input type="email" placeholder="Your email" class="w-full bg-neutral-900/60 border border-neutral-800 rounded-md px-4 py-2.5 text-white placeholder-neutral-500 focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition">
                    <div class="flex justify-end">
                        <button type="button" class="bg-amber-400 text-neutral-950 font-semibold px-6 py-2.5 rounded-md hover:bg-amber-300 transition shadow-lg shadow-amber-500/10">Subscribe</button>
                    </div>
                </form>
                
                <!-- Sosmed -->
                <div class="flex justify-end gap-4 mt-6">
                    <a href="#" class="text-neutral-500 hover:text-amber-300 transition">IN</a>
                    <a href="#" class="text-neutral-500 hover:text-amber-300 transition">X</a>
                    <a href="#" class="text-neutral-500 hover:text-amber-300 transition">YT</a>
                </div>
            </div>
        </div>

        <!-- Bagian Tengah: Teks Outline Raksasa bersinar Emas Tipis -->
        <div class="flex justify-center items-center mb-10 overflow-hidden pointer-events-none select-none">
            <h1 class="text-[11vw] font-extrabold leading-none tracking-tighter" 
                style="-webkit-text-stroke: 1px rgba(251, 191, 36, 0.25); color: transparent;">
                CELVER AUDIO
            </h1>
        </div>

        <!-- Bagian Bawah: Copyright & Status -->
        <div class="flex flex-col md:flex-row justify-between items-center text-xs text-neutral-500 border-t border-neutral-800/80 pt-6">
            <div class="flex items-center gap-2 mb-4 md:mb-0">
                <div class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></div>
                <span>All systems operational</span>
            </div>
            
            <div class="flex gap-6">
                <a href="#" class="hover:text-neutral-300 transition">Privacy policy</a>
                <a href="#" class="hover:text-neutral-300 transition">Terms of service</a>
            </div>
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