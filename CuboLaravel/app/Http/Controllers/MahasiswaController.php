<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $kampus = "Universitas Multi Data Palembang";
        $namaMahasiswa = ["Jafar", "Nadim", "Nicolas", "Vannes", "Dodi"];

        return view("mahasiswa.index", compact("namaMahasiswa", "kampus"));
    }

    public function detail($id = 0)
    {
        $kampus = "Universitas Multi Data Palembang";
        $namaMahasiswa = ["Jafar", "Nadim", "Nicolas", "Vannes", "Dodi"];
        
        return view("mahasiswa.detail", compact("namaMahasiswa", "id", "kampus"));
    }
}
