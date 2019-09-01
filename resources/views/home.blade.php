<!-- menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')

<!-- isi bagian kontek -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <p>Ini adalah halaman Home</p>
    <p>Selamat datang !</p>
@endsection