<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index($nis)
    {
        $siswa = Siswa::find($nis);
        return view('siswa.index', compact('siswa'));
    }

    public function katalog()
    {
        $buku = Buku::get(all);
        return view('siswa.katalog', compact('buku'));
    }

    public function edit($nis)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $siswa = Siswa::find($nis);
        return view('siswa.ubah', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nis)
    {
        //melakukan validasi data
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
        ]);

            Siswa::find($nis)->update($request->all());

            return redirect()->route('siswa.index')
                ->with('success', 'Mahasiswa Berhasil Diupdate');
    }
}
