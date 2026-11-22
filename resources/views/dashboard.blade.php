@extends('mainLayout')

@section('content')

    <div class="absolute inset-0">
        @include('shared.navbar')
    </div>

    <section class="relative w-full h-screen overflow-hidden flex items-center">

    <img src="{{ asset('images/BgDashboard-2.jpeg') }}"
        class="absolute bottom-0 w-full h-full lg:w-full lg:h-auto object-cover brightness-45 scenery-reveal" alt="Background">

    <!-- efek sinar lagi -->
        <div class="hidden lg:block fixed inset-0 w-full h-full overflow-hidden pointer-events-none z-0">
            <div class="absolute -top-10 roght-[35%] w-12 h-[800px] bg-gradient-to-b from-sky-300/25 via-sky-500/5 to-transparent rotate-[40deg] blur-xl animate-pulse"></div>
            <div class="absolute -top-10 left-[20%] w-12 h-[450px] bg-gradient-to-b from-sky-200/20 via-sky-500/15 to-transparent rotate-[20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
            <div class="absolute -top-10 left-[24%] w-20 h-[550px] bg-gradient-to-b from-sky-200/20 via-sky-500/15 to-transparent rotate-[20deg] blur-lg [animation:pulse_7s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
            <div class="absolute -top-20 left-[25%] w-12 h-[850px] bg-gradient-to-b from-sky-300/40 via-sky-400/10 to-transparent rotate-[30deg] blur-2xl [animation:pulse_5s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
            <div class="absolute -top-10 left-[5%] w-12 h-[750px] bg-gradient-to-b from-sky-300/20 via-sky-500/15 to-transparent rotate-[20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
            <div class="absolute -top-10 right-[11%] w-24 h-[550px] bg-gradient-to-b from-sky-200/20 via-sky-500/15 to-transparent rotate-[20deg] blur-lg"></div>
            <div class="absolute -top-20 right-[25%] w-12 h-[850px] bg-gradient-to-b from-sky-300/40 via-sky-400/10 to-transparent rotate-[30deg] blur-2xl [animation:pulse_5s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
            <div class="absolute -top-10 right-[30%] w-12 h-[750px] bg-gradient-to-b from-sky-300/20 via-sky-500/15 to-transparent rotate-[20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
            <div class="absolute -top-10 right-[11%] w-10 h-[550px] bg-gradient-to-b from-sky-200/20 via-sky-500/10 to-transparent rotate-[20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        </div>


        <div class="flex flex-col w-full h-full mx-2 lg:mx-130">

            <div class="grid grid-flow-col grid-rows-4 gap-4 h-[450px] lg:h-[750px]">
                <a href="{{ route('editDashboard-route') }}"
                    class="col-span-2 row-span-2 relative overflow-hidden bg-black/50 hover:bg-gradient-to-br from-amber-900/55 via-neutral-900/50 to-neutral-950/50 border border-neutral-900/0 hover:border-amber-400/70 bg-amber-800/20 transition duration-300 p-6 flex flex-col justify-end group">

                    <img src="{{ asset('images/editLogo.png') }}" alt="Edit Contents"
                        class="absolute inset-0 w-full h-full object-cover scale-100 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0 group-hover:animate-pulse">

                    <span class="text-white group-hover:text-amber-400 font-bold text-xl group-hover:translate-x-1 transition z-10">Edit Contents</span>
                </a>

                <a href="{{ route('edit-Banner-route') }}"
                    class="col-span-2 row-span-2 relative overflow-hidden bg-black/50 hover:bg-gradient-to-br from-amber-900/55 via-neutral-900/50 to-neutral-950/50 border border-neutral-900/0 hover:border-amber-400/70 bg-amber-800/20 rounded-bl-[25px] transition duration-300 p-6 flex flex-col justify-end group">

                     <img src="{{ asset('images/bannerEditLogo.png') }}" alt="Edit Banners"
                        class="absolute inset-0 w-full h-full object-coverscale-100 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0 group-hover:animate-bounce">

                    <span class="text-white group-hover:text-amber-400 font-bold text-xl group-hover:translate-x-1 transition z-10">Edit Banner</span>
                </a>

                <a href="{{ route('notification-route') }}"
                    class="col-span-2 row-span-4 relative overflow-hidden bg-black/50 hover:bg-gradient-to-br from-amber-900/55 via-neutral-900/50 to-neutral-950/50 border border-neutral-900/0 hover:border-amber-400/70 bg-amber-800/20  rounded-br-[25px] transition duration-300 p-6 flex flex-col justify-end group">

                      <img src="{{ asset('images/notifLogo.png') }}" alt="Edit Contents"
                        class="absolute inset-0 translate-y-1/2 w-full h-auto flex object-cover scale-100 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0">

                    <span class="text-white group-hover:text-amber-400 font-bold text-xl group-hover:translate-x-1 transition z-10">Notifications</span>
                </a>
            </div>

            <h1 class="pt-20 text-2xl text-center text-shadow-2xs text-white font-bold z-10 tracking-[10px]">
                DASHBOARD 
            </h1>    

        </div>


    </section>

@endsection