<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Kebutuhan Asli

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function()
{
    return view('dosen.index');
});

Route::get('/dosen/detail', function()
{
    return view('dosen.detail');
});

// Route::get('/fakultas', function()
// {
//     // Cara 1
//     // $data = ['fakultas' => 
//     //     ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]
//     // ];
//     // return view('fakultas.index', $data);

//     // Cara 2 Mengirim data/parameter ke view dengan 'with'
//     // return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]);

//     // Cara 3 Mengirim data/parameter ke view dengan 'compact'
//     $kampus = "Universitas Multi Data Palembang";
//     $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"];
//     return view('fakultas.index', compact('fakultas', 'kampus')); // Akan dibuatkan variable fakultas dari array fakultas
// });

Route::get('/fakultas', [FakultasController::class, 'index']);
Route::get('/fakultas/detail/{id?}', [FakultasController::class, 'detail'])->name("detailfakultas");

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/detail/{id?}', [MahasiswaController::class, 'detail']);

Route::get('/prodi', function()
{
    $kampus = "Universitas Multi Data Palembang";
    $prodiIK = ["Informatika", "Sistem Informasi", "Manajemen Informatika", "Teknik Elektro"];
    $prodiME = ["Manajemen", "Akuntansi", "Ekonomi"];
    return view('prodi.index', compact('prodiIK', 'prodiME', 'kampus'));
});

// Kebutuhan Belajar/Tutorial
Route::get('/halo', function()
{
    return "Halo Semua ,, kembali lagi dengan saya anjas";
});

// Route::get('/mahasiswa/{npm}', function($npm)
// {
//     if($npm == 2024250032)
//     {
//         echo "Halo Ja'far dengan npm " .$npm;
//     }
// });

Route::get('/halo/mantap', function()
{
    return "Ini halaman mantap dari halo";
});

