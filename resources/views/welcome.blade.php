<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Barang</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="contrainer text-center my-5">
        <h1 class="mb-4">Welcome To Master Barang</h1>
        <img src="{{ Vite::asset('resources/images/img-welcomepage.jpg') }}" alt="masterbarang">
        <p class="mt-2">Website sederhana untuk mengelola Barang</p>
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a href="home"class="btn btn-success">Let's Go To Homepage</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
