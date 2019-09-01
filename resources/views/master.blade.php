<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Laravel 8 : Sistem Tamplate Blade Laravel</title>
</head>
<body>
    <header>
        <h2>Blog Laravel</h2>
        <nav>
            <a href="/blog">Home</a>
            |
            <a href="blog/tentang">Tentang</a>
            |
            <a href="blog/kontak">Kontak</a>
        </nav>
    </header>
<hr/>
<br/>
<br/>

    <!-- bagian judul halaman blog -->
<h3>@yield('judul_halaman')</h3>

<!-- bagian konten blog -->
@yield('konten');
<br/>
<br/>
<hr/>
<footer>
    <p>&copy; <a href="https://www.laravelcom">www.laravel.com</a>. 2018-2019</p>
</footer>
</body>
</html>