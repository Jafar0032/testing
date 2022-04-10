<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class FakultasController extends Controller
{
    // Menampilkan list fakultas
    public function index()
    {
        $kampus = "Universitas Multi Data Palembang";
        $fakultas = Fakultas::all(); // SELECT * FROM Fakultas
        
        return view("fakultas.index", compact('kampus', 'fakultas'));
    }

    public function detail($id = null)
    {
        $fakultas = Fakultas::find($id); // SELECT * FROM Fakultas WHERE 
        $kampus = "Universitas Multi Data Palembang";
       
        return view("fakultas.detail", compact('kampus', 'id', 'fakultas'));
    }
}
