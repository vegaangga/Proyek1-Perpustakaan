@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div align="center" class="panel-heading">
                    <h4>Cetak Laporan PDF</h4>
                </div>
                <div class="panel-body" style="text-align: center">
                    {{--  <div class="alert alert-success">
                        <p class="alert-primary">Note: Ubah Controller e dulu lek mau download pdf awkwk </p>
                    </div>  --}}

                    <a href="{{ route('laporan.buku') }}" class="btn btn-primary" style="margin-bottom: 5px">Cetak Data Buku</a>
                    <a href="{{ route('laporan.anggota') }}" class="btn btn-danger" style="margin-bottom: 5px">Cetak Data Anggota</a>
                    <a href="{{ route('laporan.transaksi') }}" class="btn btn-success" style="margin-bottom: 5px">Cetak Data Transaksi</a>

                    {{--  <div class="alert alert-info">
                        <p>Note2: Lek udah ngerubah ke download, logo smk ga mau muncul ehehehe &#128514;</p>
                    </div>  --}}

                    {{--  <div class="alert alert-danger">
                        <p>Karena saya sudah ngantuk, Tolong dibenerin awkwkwkwk &#128525;</p>

                    </div>  --}}
                    {{--  <div class="alert alert-success">
                        <p>Maklum stuck jadi refreshing sek  &#128553;</p>
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>
@endsection
