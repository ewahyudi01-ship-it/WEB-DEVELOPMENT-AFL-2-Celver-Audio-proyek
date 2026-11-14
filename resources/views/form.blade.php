<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('save-laptop') }}" method="POST">
     @csrf  <!-- security supaya mengentahui data yg masuk adalah dari laravel -->
        <div>Input brand</div>
        <input type="text" name = "brands">
        <div>Input model</div>
        <input type="text" name = "model">
        <div>Input processor</div>
        <input type="text" name = "processor">
        <div>Input ram</div>
        <input type="number" name = "ram">

        <input type="submit" value="request" />

    </form>
</body>
</html>