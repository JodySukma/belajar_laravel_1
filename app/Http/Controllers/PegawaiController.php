<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    //exaample 9
    public function index()
    {
        // mengambil data pegawai
        $pegawai = DB::table('pegawai')->get();

        //mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }
    // examlpe 5 dan 7
//    public function index($nama)
//    {
//        return $nama;
//    }
//
//    public function formulir()
//    {
//        return view('formulir');
//    }
//
//    public function proses(Request $request)
//    {
//        $nama = $request->input('nama');
//        $alamat = $request->input('alamat');
//        return "Nama : ".$nama.", alamat : ".$alamat;
//    }
}
