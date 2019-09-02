<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // Direct ke halaman Formulir Kebersihan
    public function fkebersihan(){
        return view('fkebersihan');
    }

    // Direct ke Halaman formulir Keterlambatan dosen
    public function fketerlambatan(){
        return view('fketerlambatan');
    }

    // Direct ke halaman formulir ketidakhadiran dosen
    public function fketidakhadiran(){
        return view('fketidakhadiran');
    }

    // Direct ke halaman formulir pembimbingan skripsi
    public function fskripsi(){
        return view('fskripsi');
    }

    // direct ke halaman pembimbingan PKM
    public function fpkm(){
        return view('fpkm');
    }
    // direct ke halaman formulir 05 dan 06
    public function f56(){
        return view('f56');
    }
    
}
