<?php

namespace App\Http\Controllers;
use App\Models\Buku;
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
        $posts= Buku::orderBy('id','asc')->paginate(5);
        return view('buku.index',compact('posts'))->with('i',(request()->input('posts',1)-1)*5);
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
