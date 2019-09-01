@extends('master')

<!-- isi bagian judul -->
<!-- cara penulisan isi section pendek -->
@section('judul_halaman', 'halaman Kontak')

<!-- isi bagian kontek -->
<!-- cara penulisan isi section panjang -->
@section('konten')
    <p>Ini adalah halaman kontak</p>

    <table border="1">
        <tr>
            <td>email</td>
            <td> : </td>
            <td>jody@gmail.com</td>
        </tr>
        <tr>
            <td>hp</td>
            <td> : </td>
            <td>0892444123</td>
        </tr>
    </table>