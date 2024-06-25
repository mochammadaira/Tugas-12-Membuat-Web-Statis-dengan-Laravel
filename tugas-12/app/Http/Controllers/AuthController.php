<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registrasi() {
        return view('page.form');
    }

    public function kirim(Request $request){
        $nama = $request->input('nama');
        $namaBelakang = $request->input('nama-akhir');

        return view('page.selamatdatang', ['nama' => $nama, 'namaBelakang' => $namaBelakang]);
    }

}
