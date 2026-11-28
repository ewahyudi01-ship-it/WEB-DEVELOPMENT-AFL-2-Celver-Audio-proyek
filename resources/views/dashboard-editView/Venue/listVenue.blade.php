@extends('mainLayout')

@section('content')

    <div class="relative z-40">
        @include('shared.navbar')
    </div>

 <div class="fixed inset-0 w-full h-full">
        @include('shared.backgroundDashboard')
    </div>

<section class="w-full lg:px-80 lg:pt-50">

    <div class="relative w-full h-full ">
        <div class="border-b border-amber-400/20 pb-5 mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-xl lg:text-4xl font-bold text-amber-400 tracking-wide">
                    PORTFOLIO
                </h1>
                <p class="text-xs sm:text-sm text-neutral-400 mt-1">
                    Modify venue details or replace the current display image.
                </p>
            </div>
            
            <a href="{{ route('new-portfolio-route') }}">
            <button class="rounded-2xl px-4 py-3 px-10 font-medium text-amber-400 bg-neutral-900/50 hover:text-amber-300 hover:bg-neutral-900/20 border border-neutral-700 hover:border-amber-400/50 rounded-lg px-3 py-1.5 transition">
                + add new portfolio
            </button>
            </a>

            <a href="{{ route('dashboard-route') }}" 
               class="text-xs sm:text-sm text-amber-400 bg-neutral-900/50 hover:text-amber-300 hover:bg-neutral-900/20 border border-neutral-700 hover:border-amber-400/50 rounded-lg px-3 py-1.5 transition">
                &larr; Back
            </a>
        </div>
    </div>
    

    <div class="relative grid grid-rows-2 w-full h-full rounded-2xl bg-neutral-900/20 backdrop-blur-2xl border border-amber-800/20 gap-5 px-9 py-9 ">
        <div class="relative w-full grid grid-cols-3 rounded-2xl gap-8 bg-neutral-900/20 items-center justify-between  py-5">
            <p class ="text-md lg:text-xl font-bold text-amber-400">Title place / Portfolio</p>
            <p class ="text-md lg:text-xl font-bold text-amber-400">Description</p>
            <p class ="text-md lg:text-xl font-bold text-amber-400">Image</p>
        </div>
        @foreach ($portfolios as $portfolio)
        <div class="grid grid-rows-2 w-full">
            <div class="relative w-full grid grid-cols-3 gap-4 rounded-t-2xl bg-neutral-900/20 items-center justify-between px-10">
                <p class ="text-xm lg:text-base break-all row-span-1 text-neutral-100">{{ $portfolio->titlePlace }}</p>
                <p class ="text-xm lg:text-base break-all row-span-2 text-neutral-300">{{ $portfolio->descriptionPlace }}</p>
                <p class ="text-xm lg:text-base break-all row-span-3 text-neutral-500">{{ $portfolio->image }}</p>
            </div>
                <div class="relative w-full grid grid-cols-2 gap-4 rounded-b-2xl bg-neutral-900/20 items-center justify-between px-10">
                    <form action="{{ route('delete-portfolio', $portfolio) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{  $portfolio->id   }}">
                        <input style="background:brown; color:white; padding: 2px 6px;" type="submit" onclick="return confirm('Are you certain to delete this data? This action is permanent.')"
                        value="delete">
                    </form>

                    <a href="{{ route('edit-portfolio', $portfolio->id) }}"
                        style="background:green; color:white; padding: 2px 6px; text-decoration:none;">
                        Edit
                    </a>
                </div>
            </div>
        @endforeach
        
    </div>
    
</section>
@endsection