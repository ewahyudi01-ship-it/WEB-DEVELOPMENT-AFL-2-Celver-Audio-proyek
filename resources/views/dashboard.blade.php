@extends('mainLayout')

@section('content')

    <div class="absolute top-0">
        @include('shared.navbar')
    </div>

    <section class="relative w-full h-screen overflow-hidden flex items-center">

        <div class="fixed inset-0 w-full h-full">
            @include('shared.backgroundDashboard')
        </div>

        <!-- efek sinar lagi -->
        @include('shared.rayLightEffect')


        <div class="flex flex-col w-full h-[460px] md:h-full max-w-4xl mx-auto px-6 ">

            <div class="grid grid-flow-col grid-cols-4 grid-rows-4 gap-4 h-[450px] lg:h-[750px] intro-dashboard">
                <a href="{{ route('editDashboard-route') }}"
                    class="col-span-2 row-span-2 relative overflow-hidden bg-black/60 hover:bg-linear-to-tr/srgb from-neutral-900/30 via-neutral-800/40 to-amber-500/30  border border-neutral-900/0 hover:border-amber-300 bg-amber-800/20 transition duration-300 p-6 flex flex-col justify-end group">

                    <img src="{{ asset('images/editLogo.png') }}" alt="Edit Contents"
                        class="absolute inset-0 w-full h-full object-cover scale-100 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0 group-hover:animate-pulse ">
                    
                            <div class="relative z-10 w-full h-7 flex items-center">

                                <span class="absolute inset-0 flex items-center text-white font-bold text-sm lg:text-xl tracking-wide opacity-100 translate-y-0 group-hover:opacity-0 group-hover:-translate-y-2 transition-all duration-500">
                                    Edit Contents
                                </span>

                                <span class="absolute inset-0 flex items-center text-neutral-400 font-medium text-sm lg:text-sm tracking-wide opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500">
                                    Manage your Services, Portfolios, Contact & Achievements.
                                </span>

                            </div>
                </a>

                <a href="{{ route('edit-Banner-route') }}"
                    class="col-span-2 row-span-2 relative overflow-hidden bg-black/60 hover:bg-linear-to-tr/srgb from-neutral-900/30 via-neutral-800/40 to-amber-500/20  border border-neutral-900/0 hover:border-amber-300 bg-amber-800/20 rounded-bl-[25px] transition duration-300 p-6 flex flex-col justify-end group">

                    <img src="{{ asset('images/bannerEditLogo.png') }}" alt="Edit Banners"
                        class="absolute inset-0 w-full h-full object-cover scale-100 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0 group-hover:animate-pulse">

                        <div class="relative z-10 w-full h-7 flex items-center">

                            <span class="absolute inset-0 flex items-center text-white font-bold text-sm lg:text-xl tracking-wide opacity-100 translate-y-0 group-hover:opacity-0 group-hover:-translate-y-2 transition-all duration-500">
                                Edit Banner
                            </span>

                            <span class="absolute inset-0 flex items-center text-neutral-400 font-medium text-sm lg:text-sm tracking-wide opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500">
                                Add, change banner for website design look.
                            </span>

                        </div>
                </a>

                <a href="{{ route('notification-route') }}"
                    class="col-span-2 row-span-4 relative overflow-hidden bg-black/60 hover:bg-linear-to-tl/srgb from-neutral-900/30 via-neutral-900/40 to-amber-500/20  border border-neutral-900/0 hover:border-amber-300 bg-amber-800/20  rounded-br-[25px] transition duration-300 p-6 flex flex-col justify-end group">

                    <img src="{{ asset('images/notifLogo.png') }}" alt="Edit Contents"
                        class="absolute inset-0 translate-y-1/2 w-full h-auto flex object-cover scale-100 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0 group-hover:animate-pulse">

                        <div class="relative z-10 w-full h-7 flex items-center">

                            <span class="absolute inset-0 flex items-center text-white font-bold text-sm lg:text-xl tracking-wide opacity-100 translate-y-0 group-hover:opacity-0 group-hover:-translate-y-2 transition-all duration-500">
                                Notifications
                            </span>

                            <span class="absolute inset-0 flex items-center text-neutral-400 font-medium text-sm lg:text-sm tracking-wide opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500">
                                Client Inquiries & Messages.
                            </span>

                        </div>
                </a>
            </div>

            <h1 class="pt-20 text-2xl text-center text-shadow-2xs text-white font-bold z-10 tracking-[10px]">
                DASHBOARD
            </h1>
            @auth
                <p class="text-md text-center text-shadow-2xs text-white z-10 tracking-[7px]">Welcome, {{ auth()->user()->name }}</p>

            <div class="relative flex justify-center pt-5 w-full h-fit">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" 
                        class="px-6 py-2.5 rounded-xl text-md font-bold text-neutral-950 bg-amber-400 hover:bg-amber-300 shadow-[0_0_15px_rgba(251,191,36,0.3)] hover:shadow-[0_0_20px_rgba(251,191,36,0.5)] transition cursor-pointer z-20">Logout
                    </button>
                </form>
            </div>
            @endauth
        </div>


    </section>

@endsection