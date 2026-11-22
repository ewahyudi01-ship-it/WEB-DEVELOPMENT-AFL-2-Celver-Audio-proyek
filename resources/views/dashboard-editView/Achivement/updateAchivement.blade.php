@extends('mainLayout')

@section('content')
<section class="bg-white">
<form action="{{ route('update-achivement', $achivement) }}" method="POST">
    @csrf <!-- security supaya mengentahui data yg masuk adalah dari laravel -->
    <div>Input titleDesc</div>
    <input type="text" name="titleDesc" value="{{ $achivement->titleDesc }}">
    @error('titleDesc')
        <p class="error">{{ $message }}</p>
    @enderror

    <div>Input subTitleDesc</div>
    <input type="text" name="subTitleDesc" value="{{ $achivement->subTitleDesc }}">
    @error('subTitleDesc')
        <p class="error">{{ $message }}</p>
    @enderror
    
    <div>Input desc</div>
    <input type="text" name="desc" value="{{ $achivement->dsc }}">
    @error('desc')
        <p class="error">{{ $message }}</p>
    @enderror
    
    <input type="submit" value="request" />

    </form>
    </section>
@endsection