@extends('mainLayout')

@section('content')
<section class="min-h-screen w-full bg-neutral-950 text-white py-12 px-4 sm:px-6 flex items-center justify-center">
    
    <div class="absolute inset-0">
        @include('shared.navbar')
    </div>

    <div class="w-full max-w-2xl bg-neutral-900/90 backdrop-blur-md border border-amber-500/20 rounded-2xl shadow-2xl p-6 sm:p-10">
        
        <!-- Header Form -->
        <div class="border-b border-neutral-800 pb-5 mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-xl sm:text-2xl font-bold text-amber-400 tracking-wide">
                    Update Portfolio
                </h1>
                <p class="text-xs sm:text-sm text-neutral-400 mt-1">
                    Modify venue details or replace the current display image.
                </p>
            </div>
            
            <a href="{{ url()->previous() }}" 
               class="text-xs sm:text-sm text-neutral-400 hover:text-amber-300 border border-neutral-700 hover:border-amber-400/50 rounded-lg px-3 py-1.5 transition">
                &larr; Back
            </a>
        </div>

        <form action="{{ route('update-portfolio', $portfolio) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-medium text-neutral-200 mb-1.5">
                    Title Place <span class="text-amber-400">*</span>
                </label>
                <input type="text" name="titlePlace" value="{{ old('titlePlace', $portfolio->titlePlace) }}"
                    placeholder="e.g., Grand City Convention Hall"
                    class="w-full rounded-xl bg-neutral-950/80 border @error('titlePlace') border-red-500 @else border-neutral-700 @enderror 
                           px-4 py-2.5 text-sm text-white placeholder-neutral-500 
                           focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition">
                @error('titlePlace')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>


            <div>
                <label class="block text-sm font-medium text-neutral-200 mb-1.5">
                    Description Place <span class="text-amber-400">*</span>
                </label>
                <textarea name="descriptionPlace" rows="4"
                    placeholder="Write venue description here..."
                    class="w-full rounded-xl bg-neutral-950/80 border @error('descriptionPlace') border-red-500 @else border-neutral-700 @enderror 
                           px-4 py-2.5 text-sm text-white placeholder-neutral-500 
                           focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition">{{ old('descriptionPlace', $portfolio->descriptionPlace) }}</textarea>
                @error('descriptionPlace')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>


            <div>
                <label class="block text-sm font-medium text-neutral-200 mb-1.5">
                    Venue Image
                </label>

                @if($portfolio->image)
                    <div class="mb-3 flex items-center gap-4 p-3 rounded-xl bg-neutral-950/60 border border-neutral-800">
                        <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->titlePlace }}" 
                             class="w-20 h-14 object-cover rounded-lg border border-neutral-700">
                        <div class="text-xs text-neutral-400">
                            <p class="text-neutral-200 font-medium">Current Image:</p>
                            <p class="truncate max-w-[200px] sm:max-w-xs">{{ $portfolio->image }}</p>
                        </div>
                    </div>
                @endif

                <input type="file" name="image" accept="image/*"
                    class="w-full rounded-xl bg-neutral-950/80 border @error('image') border-red-500 @else border-neutral-700 @enderror 
                           px-4 py-2 text-sm text-neutral-300
                           file:mr-4 file:py-1.5 file:px-4 file:rounded-lg file:border-0 
                           file:text-xs file:font-semibold file:bg-amber-400 file:text-neutral-950 
                           hover:file:bg-amber-300 transition cursor-pointer">
                <p class="text-xs text-neutral-500 mt-1">Leave empty if you don't want to change the current image.</p>
                
                @error('image')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            <div class="pt-4 flex items-center justify-end gap-3 border-t border-neutral-800">

                <button type="submit" 
                    class="px-6 py-2.5 rounded-xl text-sm font-bold text-neutral-950 bg-amber-400 hover:bg-amber-300 shadow-[0_0_15px_rgba(251,191,36,0.3)] hover:shadow-[0_0_20px_rgba(251,191,36,0.5)] transition cursor-pointer">
                    Update Data
                </button>
            </div>

            
        </form>
    </div>
</section>
@endsection