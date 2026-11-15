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
                <div class="col-span-2 row-span-2 bg-amber-800/50 ">02</div>
                <div class="col-span-2 row-span-2 bg-amber-800/50 rounded-bl-[65px]">03</div>
                 <div class="col-span-2 row-span-4 bg-amber-800/50 rounded-br-[65px]">01</div>
            </div>
        </div>


    </section>

@endsection