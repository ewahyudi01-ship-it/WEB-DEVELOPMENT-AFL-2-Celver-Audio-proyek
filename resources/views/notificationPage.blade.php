@extends('mainLayout')

@section('content')


    <div class="absolute inset-0">
        @include('shared.navbar')
        
    </div>
        <div class="bg-parallax absolute inset-0 w-full h-full bg-cover bg-center z-0 intro-fadeIn-bg"
            style="background-image: url('{{ asset('images/notification-bg.jpeg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        </div>
    
    <section class="relative w-full min-h-screen h-auto lg:h-screen overflow-hidden flex flex-col pt-30 lg:flex-row lg:pt-0 items-center "> 

        <div class="relative w-max h-full flex flex-col justify-center bg-black/50 lg:px-20">
            <p class="text-amber-500 text-xs tracking-[5px] font-semibold">ADMIN PANEL</p>
            <h1 class="text-3xl md:text-4xl text-white mt-3">Messages</h1>
            <p class="text-gray-500 text-sm mt-2">Manage your received messages.</p>
            <a href="{{ route('dashboard-route') }}" class="inline-flex items-center justify-center mt-2 px-5 py-2.5 rounded-xl bg-neutral-900 hover:bg-neutral-800 text-neutral-200 border border-neutral-700 text-sm font-medium transition shrink-0">
                &larr; Back
            </a>
        </div>

        <div class="relative flex w-full h-full items-center">

        <div class="absolute flex w-10 h-full bg-linear-to-r from-[rgb(14,14,14)] to-transparent z-30"></div>

            <div class="h-full min-h-0 w-full h-auto lg:mr-140 overflow-y-auto flex flex-col gap-5 lg:gap-6 pb-6 lg:pb-0 lg:px-15 lg:snap-x lg:snap-mandatory scrollbar-track-amber-400/10">

                    @forelse ($messages as $message)

                        <div class="relative w-full h-80 lg:h-auto lg:mb-0 shrink-0 rounded-xl overflow-hidden snap-start group/card text-center text-[8px] lg:text-sm py-3 lg:py-2 mt-2 text-amber-100 drop-shadow-[0_0_3px_rgba(207,118,0,1)] bg-white/1 backdrop-blur-md border transition duration-300 border-white/1 rounded-2xl shadow-[inset_0_0_15px_rgba(245,158,11,0.2)] hover:shadow-[inset_0_0_25px_rgba(255,128,0,0.45),0_0_25px_rgba(255,128,0,0.3)]">

                            <div class="w-full my-auto h-full overflow-y-auto pr-1 flex flex-col gap-1 relative z-10">

                                <div class="p-4 md:p-8 flex flex-col gap-1 relative z-10 items-start">
                                    <p class="w-full whitespace-normal break-all text-sm text-amber-100 [text-shadow:0_0_10px_rgba(251,191,36,0.75)] text-start">{{ $message->description }}</p>
                                
                                    <form action="{{ route('delete-message', $message) }}" method="POST" onsubmit="return confirm('Are you sure want to delete it?')"
                                        class="relative z-10 pt-3">
                                        @csrf
                                        <button type="submit" 
                                                class="inline-flex items-center justify-center gap-1.5 px-4 py-1.5 rounded-lg text-xs font-semibold tracking-wider uppercase bg-red-500/10 hover:bg-red-600 text-red-400 hover:text-white border border-red-500/30 hover:border-red-500 shadow-[0_0_15px_rgba(239,68,68,0)] hover:shadow-[0_0_15px_rgba(239,68,68,0.45)] transition-all duration-300 cursor-pointer group/btn">
                                        
                                            <svg class="w-3.5 h-3.5 text-red-400 group-hover/btn:text-white transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>

                                            <span>Delete</span>
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>

                    @empty
                    <div class="relative flex w-full h-auto items-center justify-center">
                        <p class="text-sm lg:text-3xl font-bold tracking-widest text-amber-500/30">Inbox empty, no messages :/</p>
                    </div>

                    @endforelse
                    {{ $messages->links() }}
            </div>
        </div>

        </section>

@endsection