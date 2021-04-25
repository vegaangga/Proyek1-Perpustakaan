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
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Terlambat</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $index => $transaksi)
                                <tr>
                                    <td>{{ $index + $posts->firstItem() }}</td>
                                    <td>{{ $transaksi->judul }}</td>
                                    <td>{{ $transaksi->nim }}</td>
                                    <td>{{ $transaksi->nama }}</td>
                                    <td>{{ $transaksi->tgl_pinjam }}</td>
                                    <td>{{ $transaksi->tgl_kembali }}</td>
                                    <td>
                                        <?php
                                        $denda = 1000;

                                        $tgl_dateline2 = $data['tgl_kembali'];
                                        $tgl_kembali = date('Y-m-d');

                                        $lambat = terlambat($tgl_dateline2, $tgl_kembali);
                                        $denda1 = $lambat*$denda;

                                        if ($lambat>0) {
                                            # code...
                                            echo "
                                            <font color='red'>$lambat hari<br>(Rp $denda1)</font>
                                            ";
                                        }else {
                                            echo $lambat ." Hari";
                                        }
                                        ?>
                                    </td>
                                    <td>{{ $transaksi->status }}</td>

                                    <td>
                                        <a href="?page=transaksi&aksi=kembali&id=<?php echo $data['id']; ?>&judul=<?php echo $data['judul']; ?>" class="btn btn-info">Kembali</a>

                                        <a href="?page=transaksi&aksi=perpanjang&id=<?php echo $data['id']; ?>&judul=<?php echo $data['judul']?>&lambat=<?php echo $lambat ?>&tgl_kembali=<?php echo $data['tgl_kembali']?>" class="btn btn-danger">Perpanjang</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
