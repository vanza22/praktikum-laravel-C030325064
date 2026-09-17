<?php

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

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
    $mahasiswa = Mahasiswa::all();

    return view('mahasiswa', compact('mahasiswa'));
});

Route::get('/tambah-mahasiswa', function () {
    $mahasiswa = Mahasiswa::create([
        'nama' => 'Aulia Huda',
        'prodi' => 'D3 Teknik Informatika'
    ]);

    return $mahasiswa;
});