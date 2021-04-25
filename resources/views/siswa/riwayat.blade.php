@extends('siswa.siswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div align="center" class="panel-heading">
                    <h4>Tes Katalog</h4>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Denda</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                <td>{{ $siswa->judul }}</td>
                                <td>{{ $siswa->tgl_pinjam }}</td>
                                <td>{{ $siswa->tgl_kembali }}</td>
                                <td><?php
                                    $datetime2 = strtotime($siswa->tgl_kembali) ;
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
                                <td>{{ $siswa->status }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            </div>
            </div>
        </div>
    </div>
@endsection
