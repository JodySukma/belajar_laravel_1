<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = 'Jody Sukma Atmadja';

        $pelajaran = ['Laravel', 'Laravolt'];
        return view('biodata', ['nama' => $nama, 'matkul' => $pelajaran]);
    }
}
