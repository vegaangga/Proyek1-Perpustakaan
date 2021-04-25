@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div align="center" class="panel-heading">
                    <h4>Halaman Detail Aggota</h4>
            </div>
            <div class="container mt-5">
                <div class="row justify-content-center align-items-center">
                    <div class="card" style="width: 80%;">
                        <table style="width:100%">
                            <tr>
                              <td rowspan="8" align="center" style="padding: right 0;">
                                <img src="../../../../img/find_user.png" style="width: 200px;"></td>
                              <th>NIS</th>
                              <td>{{$anggota->nis}}</td>
                            </tr>
                            <tr>
                              <th>Nama</th>
                              <td>{{$anggota->nama}}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{$anggota->tempat_lahir}}</td>
                              </tr>
                            <tr>
                              <th>Tanggal Lahir</th>
                              <td>{{$anggota->tanggal_lahir}}</td>
                            </tr>
                            <tr>
                              <th>Jenis Kelamin</th>
                              <td>{{$anggota->jk}}</td>
                            </tr>
                            <tr>
                                <th>Jurusan</th>
                                <td>{{$anggota->jurusan}}</td>
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