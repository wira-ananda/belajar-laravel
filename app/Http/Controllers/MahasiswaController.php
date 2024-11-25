<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function view()
    {
        $mahasiswas = Mahasiswa::all();
        return view('view_mahasiswa', compact('mahasiswas'));
    }

    public function create()
    {
        return view('view_inputmahasiswa');
    }

    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->kodejurusan = $request->kodejurusan;
        $mahasiswa->save();
        return redirect('mahasiswa');
    }

    public function edit(Request $request)
    {
        $mahasiswa = Mahasiswa::find($request->nim);
        return view('view_editmahasiswa', compact('mahasiswa'));
    }

    public function update(Request $request)
    {
        $mahasiswa = Mahasiswa::find($request->nim);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->kodejurusan = $request->kodejurusan;
        $mahasiswa->save();
        return redirect('mahasiswa');
    }
    public function destroy($nim)
    {
        $mahasiswa = Mahasiswa::find($nim);
        $mahasiswa->delete();
        return redirect('mahasiswa');
    }
}
