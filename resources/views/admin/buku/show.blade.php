@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div align="center" class="panel-heading">
                    <h4>Halaman Detail Buku Perpustakaan</h4>
            </div>
            <div class="container mt-5">
                <div class="row justify-content-center align-items-center">
                    <div class="card" style="width: 80%;">
                        <table style="width:100%">
                            <tr>
                              <td rowspan="8" align="center" style="padding: right 0;">
                                <img src="../../../../img/find_user.png" style="width: 200px;"></td>
                              <th>Judul</th>
                              <td>{{$buku->judul}}</td>
                            </tr>
                            <tr>
                              <th>Pengarang</th>
                              <td>{{$buku->pengarang}}</td>
                            </tr>
                            <tr>
                                <th>Penerbit</th>
                                <td>{{$buku->penerbit}}</td>
                              </tr>
                            <tr>
                              <th>Tahun Terbit</th>
                              <td>{{$buku->tahun_terbit}}</td>
                            </tr>
                            <tr>
                              <th>ISBN</th>
                              <td>{{$buku->isbn}}</td>
                            </tr>
                            <tr>
                                <th>Jumlah Buku</th>
                                <td>{{$buku->jumlah_buku}}</td>
                            </tr>
                            <tr>
                                <th>Lokasi</th>
                                <td>{{$buku->lokasi}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Input</th>
                                <td>{{$buku->tgl_input}}</td>
                            </tr>

                          </table>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
