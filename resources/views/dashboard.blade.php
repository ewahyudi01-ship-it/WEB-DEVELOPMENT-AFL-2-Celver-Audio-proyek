@extends('mainLayout')

@section('content')

    <div class="absolute inset-0">
        @include('shared.navbar')
    </div>

    <section class="relative w-full h-full flex items-center">

    <!-- efek sinar lagi -->
    <div class="absolute top-0 right-0 w-full h-full overflow-hidden pointer-events-none z-50">
        <div class="absolute -top-10 left-[5%] w-12 h-[800px] bg-gradient-to-b from-amber-300/25 via-amber-500/5 to-transparent rotate-[-40] blur-xl animate-pulse"></div>
        <div class="absolute -top-10 left-[20%] w-12 h-[450px] bg-gradient-to-b from-amber-200/20 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        <div class="absolute -top-10 left-[24%] w-20 h-[550px] bg-gradient-to-b from-amber-200/20 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg [animation:pulse_7s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        <div class="absolute -top-20 left-[25%] w-12 h-[850px] bg-gradient-to-b from-amber-300/40 via-amber-400/10 to-transparen -rotate-[-30deg] blur-2xl [animation:pulse_5s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        <div class="absolute -top-10 left-[5%] w-12 h-[750px] bg-gradient-to-b from-amber-300/20 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        <div class="absolute -top-10 right-[11%] w-22 h-[550px] bg-gradient-to-b from-amber-200/20 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg "></div>
        <div class="absolute -top-20 right-[25%] w-12 h-[850px] bg-gradient-to-b from-amber-300/40 via-amber-400/10 to-transparen -rotate-[-30deg] blur-2xl [animation:pulse_5s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        <div class="absolute -top-10 right-[30%] w-12 h-[750px] bg-gradient-to-b from-amber-300/20 via-amber-500/15 to-transparent -rotate-[-20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>
        <div class="absolute -top-10 right-[11%] w-22 h-[550px] bg-gradient-to-b from-amber-200/20 via-amber-500/1 to-transparent -rotate-[-20deg] blur-lg [animation:pulse_4s_cubic-bezier(0.4,0,0.6,1)_infinite]"></div>

    </div>

        <div class="flex flex-col w-full h-full mx-130">

            <div class="grid grid-flow-col grid-rows-4 gap-4 h-[450px] lg:h-[750px]">
                <a href="{{ route('editDashboard-route') }}"
                    class="col-span-2 row-span-2 relative overflow-hidden bg-gradient-to-br from-amber-900/35 via-neutral-900/80 to-neutral-950/90 border border-amber-500/20 hover:border-amber-400/70 bg-amber-800/50 hover:bg-amber-700/60 transition duration-300 p-6 flex flex-col justify-end group">
                    
                    <img src="{{ asset('images/imageDash1.jpeg') }}" alt="Edit Contents"
                        class="absolute inset-0 w-full h-full object-cover opacity-0 scale-100 group-hover:opacity-70 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0">

                    <span class="text-white font-bold text-xl group-hover:translate-x-1 transition z-10">Edit Contents</span>
                </a>

                <a href="{{ route('editDashboard-route') }}"
                    class="col-span-2 row-span-2 relative overflow-hidden bg-gradient-to-br from-amber-900/35 via-neutral-900/80 to-neutral-950/90 border border-amber-500/20 hover:border-amber-400/70 bg-amber-800/50 hover:bg-amber-700/60 rounded-bl-[65px] transition duration-300 p-6 flex flex-col justify-end group">
                    
                     <img src="{{ asset('images/imageDash2.jpeg') }}" alt="Edit Contents"
                        class="absolute inset-0 w-full h-full object-cover opacity-0 scale-100 group-hover:opacity-70 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0">
                    
                    <span class="text-white font-bold text-xl group-hover:translate-x-1 transition z-10">Edit Banner</span>
                </a>

                <a href="{{ url('/#achivementSection') }}"
                    class="col-span-2 row-span-4 relative overflow-hidden bg-gradient-to-br from-amber-900/35 via-neutral-900/80 to-neutral-950/90 border border-amber-500/20 hover:border-amber-400/70 bg-amber-800/50 hover:bg-amber-700/60  rounded-br-[65px] transition duration-300 p-6 flex flex-col justify-end group">
                    
                      <img src="{{ asset('images/imageDash3.jpeg') }}" alt="Edit Contents"
                        class="absolute inset-0 w-full h-full object-cover opacity-0 scale-100 group-hover:opacity-70 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0">

                    <span class="text-white font-bold text-xl group-hover:translate-x-1 transition z-10">Notifications</span>
                </a>
            </div>
        </div>


    </section>

@endsection