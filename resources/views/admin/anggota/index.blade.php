@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div align="center" class="panel-heading">
                    <h4>Data Anggota Perpustakaan SMKNEDAS</h4>
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
                                    <form action="{{ route('anggota.destroy',$murid->nis) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('anggota.show',$murid->nis) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('anggota.edit',$murid->nis) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                        <button onclick="return confirm('Anda yakin ingin meghapus data ini ?')"
                                        type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
