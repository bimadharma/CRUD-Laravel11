<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi laravel</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">  
</head>
<body>
    <h1 class="text-center mt-3">Selamat datang di aplikasi CRUD Laravel 11</h1>

    <div class="text-center">
        <a href="{{route('siswa.tampil')}}" class="btn btn-primary">Kelola data siswa</a>
    </div>
    
</body>
</html>