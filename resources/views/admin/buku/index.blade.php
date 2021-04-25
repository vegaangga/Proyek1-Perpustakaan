@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div align="center" class="panel-heading">
                    <h4>Data Buku Perpustakaan SMK NEDAS</h4>
                </div>
                <div class="panel-body">
                    <a href="{{ route('buku.create') }}" class="btn btn-success" style="margin-bottom: 5px">Tambah Data</a>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                     @endif

                    <!-- Form Search -->
                        <div class="float-left my-2">
                            <form action="{{ route('buku.index') }}" method="GET">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" name="search" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cari</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    <!-- End Form Search -->

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
                                        <form action="{{ route('buku.destroy',$buku->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('buku.show', $buku->id) }}">Show</a>
                                            <a class="btn btn-primary" href="{{ route('buku.edit', $buku->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Anda yakin ingin meghapus data ini ?')"
                                            type="submit" class="btn btn-danger">Delete</button>
                                        </form>
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
