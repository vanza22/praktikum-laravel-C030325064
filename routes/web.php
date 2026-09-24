<?php

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\AkademikController;

Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, Laravel!';
});

Route::get('/belajar', function () {
    return view('halo');
});

Route::get('/mahasiswa', function () {
    $data = Mahasiswa::all();

    return view('mahasiswa.index', compact('data'));
});

Route::get('/tentang', function () {
    return 'Halaman Tentang';
});

Route::get('/matakuliah', function () {
    $matakuliahs = \App\Models\Matakuliah::with('dosen')->get();

    return view('matakuliah.index', compact('matakuliahs'));
});

Route::get('/akademik', [AkademikController::class, 'index']);