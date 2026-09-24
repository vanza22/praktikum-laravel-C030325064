<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;

class AkademikController extends Controller
{
    public function index()
    {
        $matakuliahs = Matakuliah::with('dosen')->get();

        return view('akademik.index', compact('matakuliahs'));
    }
}