@extends('mainLayout')

@section('content')

    <div class="absolute inset-0">
        @include('shared.navbar')
    </div>

    <section class="relative w-full h-screen overflow-hidden flex items-center">

    <img src="{{ asset('images/Bgdashboard.jpeg') }}"
        class="absolute bottom-0 w-full h-full lg:w-full lg:h-auto object-cover" alt="Background">

    <!-- efek sinar lagi -->
    <div class="absolute top-0 right-0 w-full h-full overflow-hidden pointer-events-none z-50">
        <div class="absolute -top-10 left-[5%] w-9 lg:w-12 h-[800px] bg-gradient-to-b from-amber-300/55 via-amber-500/5 to-transparent -rotate-[-20deg] blur-xl animate-pulse"></div>
        <div class="absolute -top-10 left-[20%] w-2 lg:w-12 h-[450px] bg-gradient-to-b from-amber-200/50 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        <div class="absolute -top-10 left-[24%] w-6 lg:w-20 h-[550px] bg-gradient-to-b from-amber-200/40 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg [animation:pulse_7s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        <div class="absolute -top-20 left-[25%] w-8 lg:w-12 h-[850px] bg-gradient-to-b from-amber-300/60 via-amber-400/10 to-transparen -rotate-[-30deg] blur-2xl [animation:pulse_5s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        <div class="absolute -top-10 left-[45%] w-2 lg:w-12 h-[750px] bg-gradient-to-b from-amber-300/30 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg [animation:pulse_3s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        <div class="absolute -top-10 right-[11%] w-12 lg:w-22 h-[550px] bg-gradient-to-b from-amber-200/40 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg "></div>
        <div class="absolute -top-20 right-[25%] w-2 lg:w-12 h-[850px] bg-gradient-to-b from-amber-300/40 via-amber-400/10 to-transparen -rotate-[-30deg] blur-2xl [animation:pulse_5s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        <div class="absolute -top-10 right-[30%] w-16 lg:w-12 h-[750px] bg-gradient-to-b from-amber-300/40 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        <div class="absolute -top-10 right-[11%] w-2 lg:w-22 h-[550px] bg-gradient-to-b from-amber-200/30 via-amber-500/1 to-transparent -rotate-[-20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>

    </div>

        <div class="flex flex-col w-full h-full mx-2 lg:mx-130">

            <div class="grid grid-flow-col grid-rows-4 gap-4 h-[450px] lg:h-[750px]">
                <a href="{{ route('editDashboard-route') }}"
                    class="col-span-2 row-span-2 relative overflow-hidden bg-gradient-to-br from-amber-900/15 via-neutral-900/80 to-neutral-950/90 border border-amber-500/20 hover:border-amber-400/70 bg-amber-800/20 hover:bg-amber-700/60 transition duration-300 p-6 flex flex-col justify-end group">

                    <img src="{{ asset('images/editLogo.png') }}" alt="Edit Contents"
                        class="absolute inset-0 w-full h-full object-cover scale-100 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0 group-hover:animate-pulse">

                    <span class="text-white group-hover:text-amber-400 text-xl group-hover:translate-x-1 transition z-10">Edit Contents</span>
                </a>

                <a href="{{ route('editBanner-route') }}"
                    class="col-span-2 row-span-2 relative overflow-hidden bg-gradient-to-br from-amber-900/15 via-neutral-900/80 to-neutral-950/90 border border-amber-500/20 hover:border-amber-400/70 bg-amber-800/20 hover:bg-amber-700/60 rounded-bl-[65px] transition duration-300 p-6 flex flex-col justify-end group">

                     <img src="{{ asset('images/bannerEditLogo.png') }}" alt="Edit Banners"
                        class="absolute inset-0 w-full h-full object-coverscale-100 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0 group-hover:animate-bounce">

                    <span class="text-white group-hover:text-amber-400 text-xl group-hover:translate-x-1 transition z-10">Edit Banner</span>
                </a>

                <a href="{{ route('notification-route') }}"
                    class="col-span-2 row-span-4 relative overflow-hidden bg-gradient-to-br from-amber-900/15 via-neutral-900/80 to-neutral-950/90 border border-amber-500/20 hover:border-amber-400/70 bg-amber-800/20 hover:bg-amber-700/60  rounded-br-[65px] transition duration-300 p-6 flex flex-col justify-end group">

                      <img src="{{ asset('images/notifLogo.png') }}" alt="Edit Contents"
                        class="absolute inset-0 translate-y-1/2 w-full h-auto flex object-cover scale-100 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0">

                    <span class="text-white group-hover:text-amber-400 text-xl group-hover:translate-x-1 transition z-10">Notifications</span>
                </a>
            </div>

            <h1 class="pt-20 text-2xl text-center text-amber-500 font-bold z-10 tracking-widest">
                DASHBOARD 
            </h1>    

        </div>


    </section>

@endsection