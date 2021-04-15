@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div align="center" class="panel-heading">
                    <h4>Data Buku Digital Library</h4>
                </div>
                <div class="panel-body">
                    <a href="" class="btn btn-primary" style="margin-bottom: 5px">Tambah Data</a>

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
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>ISBN</th>
                                    <th>Jumlah Buku</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $index => $buku)
                                <tr>
                                    <td>{{ $index + $posts->firstItem() }}</td>
                                    <td>{{ $buku->judul }}</td>
                                    <td>{{ $buku->pengarang }}</td>
                                    <td>{{ $buku->penerbit }}</td>
                                    <td>{{ $buku->isbn }}</td>
                                    <td>{{ $buku->jumlah_buku }}</td>
                                    <td>
                                        <a href="" class="btn btn-info">Ubah</a>
                                        <a onclick="return confirm('Anda yakin ingin meghapus data ini ?')" href="" class="btn btn-danger">Hapus</a>
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