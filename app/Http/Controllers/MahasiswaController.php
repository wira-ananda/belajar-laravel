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
        $request->validate(
            [
                'nim' => 'required|unique:mahasiswa,nim|numeric|digits:6',
                'nama' => 'required|min:2|regex:/^[\pL\s\'\-\.\']+$/u',
                'alamat' => 'required',
                'kodejurusan' => 'required|max:2|alpha:ascii'
            ],
            [
                'nim.required' => 'Nim harus di isi!',
                'nim.unique' => 'Nim sudah terdaftar. Gunakan Nim yang lain!',
                'nim.digits' => 'Nim harus 6 digit!',
                'nim.numeric' => 'Nim harus berisi angka!',

                'nama.required' => 'Nama harus di isi!',
                'nama.min' => 'Nama minimal 2 huruf.',
                'nama.regex' => 'Please enter a valid name without special characters or numbers.',

                'alamat.required' => 'Alamat harus diisi!',

                'kodejurusan.required' => 'Kode jurusan tidak boleh kosong!',
                'kodejurusan.max' => 'Kode jurusan tidak boleh lebih dari 2 huruf!',
                'kodejurusan.alpha' => 'Inputan salah! Gunakan huruf alphabet!'

            ]
        );

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
        $request->validate(
            [
                // 'nim' => 'required|unique:mahasiswa,nim|numeric|digits:6',
                'nama' => 'required|min:2|regex:/^[\pL\s\'\-\.\']+$/u',
                'alamat' => 'required',
                'kodejurusan' => 'required|max:2|alpha:ascii'
            ],
            [
                // 'nim.required' => 'Nim harus di isi!',
                // 'nim.unique' => 'Nim sudah terdaftar. Gunakan Nim yang lain!',
                // 'nim.digits' => 'Nim harus 6 digit!',
                // 'nim.numeric' => 'Nim harus berisi angka!',

                'nama.required' => 'Nama harus di isi!',
                'nama.min' => 'Nama minimal 2 huruf.',
                'nama.regex' => 'Please enter a valid name without special characters or numbers.',

                'alamat.required' => 'Alamat harus diisi!',

                'kodejurusan.required' => 'Kode jurusan tidak boleh kosong!',
                'kodejurusan.max' => 'Kode jurusan tidak boleh lebih dari 2 huruf!',
                'kodejurusan.alpha' => 'Inputan salah! Gunakan huruf alphabet!'

            ]
        );

        $mahasiswa = Mahasiswa::findOrFail($request->nim);
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
