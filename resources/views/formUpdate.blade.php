<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('update-laptop', $testing->id) }}" method="POST">
        @csrf
        <div>Input brand</div>
        <input type="text" name="brands" value="{{ $testing->brands }}">
        <div>Input model</div>
        <input type="text" name="model" value="{{ $testing->model }}">
        <div>Input processor</div>
        <input type="text" name="processor" value="{{ $testing->processor }}">
        <div>Input ram</div>
        <input type="number" name="ram" value="{{ $testing->ram }}">
    
        <input type="submit" value="Update" />
    </form>
</body>
</html>