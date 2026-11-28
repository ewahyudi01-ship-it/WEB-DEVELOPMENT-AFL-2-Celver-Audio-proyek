@extends('mainLayout')

@section('content')

  <div class="absolute inset-0">
        @include('shared.navbar')
    </div>

    <div class="absolute inset-0">
        <img src="{{ asset('images/BgDashboard-2.jpeg') }}"
        class="absolute bottom-0 w-full h-full object-cover" alt="Background">
    </div>
    <div class="relative flex w-full min-h-screen items-center justify-center px-5 overflow-hidden">

            <form action="/login" method="POST">
                @csrf
               
                <div class="relative z-10 max-w-7xl h-full px-10 lg:px-30 py-10 gap-5 flex flex-col bg-white/5 backdrop-blur-lg border border-white/10 rounded-xl intro-dashboard-1">
                     <P class="font-bold text-white text-2xl">Celver Audio</P>

                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Gmail" class="py-2 px-3 text-white rounded-md border border-neutral-500/30 focus:outline-none">
                    <input type="password" name="password"  placeholder="Password" class="py-2 px-3 text-white rounded-md border border-neutral-500/30 focus:outline-none">
                        @error('email') <p class="text-red-400" >{{ $message }}</p> @enderror
                    <button class="group relative overflow-hidden w-full py-4 rounded-xl bg-gradient-to-r from-[#A77B32] to-[#D5AE68] text-[#17120A] font-semibold tracking-[2px] text-xs transition-all duration-300 hover:shadow-[0_0_30px_rgba(212,168,85,0.2)] hover:brightness-110" 
                        type="submit">
                        LOGIN
                    </button>
                </div>
            </form>
    </div>   

@endsection