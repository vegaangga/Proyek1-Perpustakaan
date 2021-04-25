<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts= Anggota::all()->paginate(5);
        $posts= Anggota::orderBy('nis','asc')->paginate(5);
        //return view('anggota.anggota', ['posts' => $posts]);
        return view('admin.anggota.index',compact('posts'))->with('i',(request()->input('posts',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'jk'=>'required',
            'jurusan'=>'required'
            ]);

        //fungsieloquentuntukmenambahdata
        Anggota::create($request->all());
        //jikadataberhasilditambahkan,akankembalikehalamanutama
        return redirect()->route('anggota.index')->with('success','Murid Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nis)
    {
        $anggota = Anggota::where('nis', $nis)->first();
        return view('admin.anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nis)
    {
        $anggota = Anggota::where('nis', $nis)->first();
        return view('admin.anggota.ubah', compact('anggota'));
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
        $request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'jk'=>'required',
            'jurusan'=>'required'
            ]);

        //fungsieloquentuntukmenambahdata
        Anggota::create($request->all());
        //jikadataberhasilditambahkan,akankembalikehalamanutama
        return redirect()->route('anggota.index')->with('success','Siswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nis)
    {
        Anggota::find($nis)->delete();
        return redirect()->route('anggota.index')
            -> with('success', 'Siswa Berhasil Dihapus');
    }
}
