<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function view()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswas'));
    }
}
