@extends('mainLayout')

@section('content')

<div class="relative flex flex-col w-full h-auto items-center">
    @foreach ($portfolios as $portfolio)
        <p class="text-white">{{ $portfolio }}</p>
        
    @endforeach
        {{ $portfolios->links() }}

</div>

@endsection