@extends('mainLayout')

@section('content')

     <div class="fixed top-0 left-0 w-full z-60">
                    @include('shared.navbar')
                </div>

            <header class="relative w-full h-full md:h-auto overflow-hidden z-30 justify-center">

                <img src="{{ asset('images/' . $scenery->image) }}"
                    class="block w-full h-[40vh] lg:w-full lg:h-auto object-cover scenery-reveal"
                    alt="pemandangan">

                    <div id="intro" class="absolute inset-0 flex w-full h-full items-center justify-center text-center px-10 lg:px-0 lg:-top-14">
                        <h1 class="font-[Outfit] font-extralight lg:font-medium text-6xl text-white z-0">
                            SOUND FOR YOUR PLACES
                        </h1>
                    </div>

                    <div class="absolute inset-0 overflow-hidden">

                        <img src="{{ asset('images/' . $interior->image) }}" class="absolute lg:-bottom-60 left-0 w-[400px] md:w-[1000px] lg:w-full h-auto max-w-none interior-reveal"
                            alt="Interior">

                    </div>


            </header>

            <section class="relative w-full min-h-screen">

                <div class="absolute inset-0 -top-10 w-full min-h-screen flex flex-col items-center justify-center bg-[#0f0c0a] z-30 drop-shadow-[0_0_8px_rgba(251,191,36,0.3)] overflow-hidden">

                    <div class="absolute top-0 -left-20 w-68 h-68 lg:w-126 lg:h-126 bg-amber-600/10 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="absolute top-1/1 -left-20 w-36 h-36 lg:w-96 lg:h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="absolute top-1/2 -right-20 w-56 h-56 lg:w-96 lg:h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

                    <div class="w-full h-full flex flex-col items-center px-5 py-8 lg:py-30">
                        <div id="aboutSection" class="md:w-1/2">
                            <h3 class="text-amber-400 text-7xl font-bold mb-4">About Us</h3>
                            <p class="text-neutral-400 leading-relaxed text-lg">
                                We specialize in professional sound system installation services. With over 10 years of experience,
                                we
                                provide planning, installation, for a wide range of settings—from local events, nightclubs, and
                                cafes.
                            </p>
                        </div>

                        <div class="w-full max-w-6xl mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:px-25">

                            @forelse ($venues as $venue)
                                <div class="h-full flex flex-col bg-amber-900/10 border border-neutral-800 hover:border-amber-400/50 rounded-xl hover:drop-shadow-[0_0_8px_rgba(251,191,36,0.3)] overflow-hidden transition duration-300">

                                    <div class="w-full aspect-video overflow-hidden bg-neutral-800">
                                        <img src="{{ asset('images/' . $venue->image) }}" alt="{{ $venue->titlePlace }}"
                                            class="w-full h-full object-cover hover:scale-105 transition duration-500">
                                    </div>

                                    <div class="flex flex-col flex-grow justify-between">
                                        <div>
                                            <h4 class="font-[Outfit] text-amber-400 text-xl font-bold mb-2 line-clamp-1">
                                                {{ $venue->titlePlace }}
                                            </h4>
                                            <p class="font-[Outfit] text-neutral-400 text-sm leading-relaxed line-clamp-3">
                                                {{ $venue->descriptionPlace }}
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            @empty
                                <div class="col-span-full text-center py-12 text-neutral-500">
                                    Empty Spaces here...
                                </div>
                            @endforelse
                        </div>

                    </div>
                </div>

            </section>
@endsection