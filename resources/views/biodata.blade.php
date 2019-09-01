<!DOCTYPE html>
<html>
<head>
    <title>Tutorial laravel #4 : Passing Data controller ke view laravel</title>
</head>
<body>
    <h1>Tutorial laravel</h1>
    <a href="https://www.belajarLarave.com/catagory/laravel">www.belajarLaravel.com</a>
    <br>
    <p>Nama : {{ $nama }}</p>

    <p>Mata Pelajaran</p>
    <ul>
        @foreach($matkul as $m)
            <li>{{$m}}</li>
        @endforeach
    </ul>
</body>
</html>