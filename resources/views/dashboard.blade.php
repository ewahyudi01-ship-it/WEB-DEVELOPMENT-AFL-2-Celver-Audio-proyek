@extends('mainLayout')

@section('content')

    <div class="absolute inset-0">
        @include('shared.navbar')
    </div>

    <section class="relative w-full h-screen overflow-hidden flex items-center">

        @include('shared.backgroundDashboard')

        <!-- efek sinar lagi -->
        @include('shared.rayLightEffect')


        <div class="flex flex-col w-full h-full mx-2 lg:mx-130">

            <div class="grid grid-flow-col grid-rows-4 gap-4 h-[450px] lg:h-[750px]">
                <a href="{{ route('editDashboard-route') }}"
                    class="col-span-2 row-span-2 relative overflow-hidden bg-black/60 hover:bg-black/70  border border-neutral-900/0 hover:border-amber-300 bg-amber-800/20 transition duration-300 p-6 flex flex-col justify-end group">

                    <img src="{{ asset('images/editLogo.png') }}" alt="Edit Contents"
                        class="absolute inset-0 w-full h-full object-cover scale-100 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0 group-hover:animate-pulse">

                    <span
                        class="text-white group-hover:text-amber-400 font-bold text-xl group-hover:translate-x-1 transition z-10">Edit
                        Contents</span>
                </a>

                <a href="{{ route('edit-Banner-route') }}"
                    class="col-span-2 row-span-2 relative overflow-hidden bg-black/60 hover:bg-black/70  border border-neutral-900/0 hover:border-amber-300 bg-amber-800/20 rounded-bl-[25px] transition duration-300 p-6 flex flex-col justify-end group">

                    <img src="{{ asset('images/bannerEditLogo.png') }}" alt="Edit Banners"
                        class="absolute inset-0 w-full h-full object-coverscale-100 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0 group-hover:animate-pulse">

                    <span
                        class="text-white group-hover:text-amber-400 font-bold text-xl group-hover:translate-x-1 transition z-10">Edit
                        Banner</span>
                </a>

                <a href="{{ route('notification-route') }}"
                    class="col-span-2 row-span-4 relative overflow-hidden bg-black/60 hover:bg-black/70 border border-neutral-900/0 hover:border-amber-300 bg-amber-800/20  rounded-br-[25px] transition duration-300 p-6 flex flex-col justify-end group">

                    <img src="{{ asset('images/notifLogo.png') }}" alt="Edit Contents"
                        class="absolute inset-0 translate-y-1/2 w-full h-auto flex object-cover scale-100 group-hover:scale-105 transition-all duration-500 pointer-events-none z-0 group-hover:animate-pulse">

                    <span
                        class="text-white group-hover:text-amber-400 font-bold text-xl group-hover:translate-x-1 transition z-10">Notifications</span>
                </a>
            </div>

            <h1 class="pt-20 text-2xl text-center text-shadow-2xs text-white font-bold z-10 tracking-[10px]">
                DASHBOARD
            </h1>

        </div>


    </section>

@endsection