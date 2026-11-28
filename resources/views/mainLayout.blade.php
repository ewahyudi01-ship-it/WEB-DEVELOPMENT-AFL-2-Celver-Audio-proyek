<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Celver Audio')</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body class="bg-[rgb(11,11,11)]">

    @yield('content')

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
        
        gsap.to(".banner-parallax", {
            y: "5%",
            ease: "none",
            scrollTrigger: {
                trigger: ".banner-parallax",
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
            y: -50,
            opacity: 1,
            duration: 2
        });

        gsap.from("#intro-button", {
            y: 10,
            opacity: 1,
            duration: 1
        });

        gsap.from("#intro-stars", {
            y: -5,
            opacity: 0,
            duration: 10
        });

        gsap.from(".intro-fadeIn-bg", {
            y: 0,
            opacity: 0,
            duration: 1
        });

        gsap.from("#intro-button", {
            y: 10,
            opacity: 1,
            duration: 1
        });

        gsap.from(".intro-dashboard-1", {
            y: -10,
            opacity: 1,
            duration: 1
        });

        gsap.from(".intro-dashboard-2", {
            y: -15,
            opacity: 0,
            duration: 1
        });

        gsap.from(".entrace-left-1", {
            x: -20,
            opacity: 1,
            duration: 2
        });

        gsap.from(".entrace-left-2", {
            x: -160,
            opacity: 1,
            duration: 2
        });

        gsap.from(".entrace-left-3", {
            x: -290,
            opacity: 1,
            duration: 2
        });

    </script>
</html>