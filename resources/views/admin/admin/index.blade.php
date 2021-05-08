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
                <!-- Form Search -->
                    <div class="float-left my-2">
                        <form action="{{ route('anggota.index') }}" method="GET">
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
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $index => $admin)

                            <tr>
                                <td>{{ $index + $posts->firstItem() }}</td>
                                <td>{{ $admin->id }}</td>
                                <td>{{ $admin->nama }}</td>
                                <td>{{ $admin->tempat_lahir }}</td>
                                <td>{{ $admin->tanggal_lahir }}</td>
                                <td>{{ $admin->jk }}</td>
                                <td>
                                    <form action="{{ route('admin.destroy',$admin->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('admin.show',$admin->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('admin.edit',$admin->id) }}">Edit</a>
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
