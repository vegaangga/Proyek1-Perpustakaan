@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div align="center" class="panel-heading">
                    <h4>Data Anggota Digital Library</h4>
            </div>
            <div class="panel-body">
                <a href="{{ route('anggota.create') }}" class="btn btn-success" style="margin-bottom: 5px">Tambah Data</a>

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
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $index => $murid)

                            <tr>
                                <td>{{ $index + $posts->firstItem() }}</td>
                                <td>{{ $murid->nis }}</td>
                                <td>{{ $murid->nama }}</td>
                                <td>{{ $murid->tempat_lahir }}</td>
                                <td>{{ $murid->tanggal_lahir }}</td>
                                <td>{{ $murid->jk }}</td>
                                <td>{{ $murid->jurusan }}</td>
                                <td>
                                    <a href="" class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm('Anda yakin ingin meghapus data ini ?')" href="?" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection