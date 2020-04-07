<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller {
    public function index() {
        $nama = 'Septianda Reza Maulana';
        $materi = ["Proyek", "Manajemen Proyek", 
                    "Komputasi Kognitif", "Pemrograman Web Lanjut"];
            return view('biodata', ['nama' => $nama, 
                                    'materi' => $materi]);
    }
}