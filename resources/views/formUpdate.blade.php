<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('update-laptop', $testing) }}" method="POST">
        @csrf
        <div>Input brand</div>
        <input type="text" name="brands" value="{{ $testing->brands }}">
        @error('brands')
            <p class="error">{{ $message }}</p>
        @enderror


        <div>Input model</div>
        <input type="text" name="model" value="{{ $testing->model }}">
        @error('model')
            <p class="error">{{ $message }}</p>
        @enderror


        <div>Input processor</div>
        <input type="text" name="processor" value="{{ $testing->processor }}">
        @error('processor')
            <p class="error">{{ $message }}</p>
        @enderror

        <div>Input ram</div>
        <input type="number" name="ram" value="{{ $testing->ram }}">
        @error('ram')
            <p class="error">{{ $message }}</p>
        @enderror


        <input type="submit" value="Update" />
    </form>
</body>
</html>