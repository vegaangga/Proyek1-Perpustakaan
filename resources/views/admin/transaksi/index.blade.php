@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div align="center" class="panel-heading">
                        <h4>Data Peminjaman Perpustakaan SMK NEDAS</h4>
                </div>
                <div class="panel-body">
                    <a href="" class="btn btn-success" style="margin-bottom: 5px">Tambah Data</a>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Nama</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Durasi</th>
                                    <th>Denda</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $index => $transaksi)
                                <tr>
                                    <td>{{ $index + $posts->firstItem() }}</td>
                                    <td>{{ $transaksi->judul }}</td>
                                    <td>{{ $transaksi->nama }}</td>
                                    <td>{{ $transaksi->tgl_pinjam }}</td>
                                    <td>{{ $transaksi->tgl_kembali }}</td>
                                    <td>
                                            <?php
                                            $datetime2 = strtotime($transaksi->tgl_kembali) ;
                                            $datenow = strtotime(date("Y-m-d"));
                                            $durasi = ($datetime2 - $datenow) / 86400 ;
                                        ?>
                                        @if ($durasi < 0 )
                                            Durasi Habis / {{ $durasi }} Hari
                                        @else
                                            {{ $durasi }} Hari
                                        @endif
                                    </td>
                                    <td>
                                        @if ($durasi < 0)
                                        <?php $denda = abs($durasi) * 500 ; ?>
                                        {{ $denda }}
                                    @else
                                        0
                                    @endif
                                    </td>
                                    <td>{{ $transaksi->status }}</td>

                                    <td>
                                        <a href="" class="btn btn-info">Kembali</a>

                                        <a href="" class="btn btn-danger">Perpanjang</a>
                                    </td>
                                </tr>

                            </tbody>
                            @endforeach
                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
