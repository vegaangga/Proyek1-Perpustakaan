@extends('siswa.siswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div align="center" class="panel-heading">
                    <h4>Ubah Profil Siswa</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">

                        <form method="post" action="{{ route('siswa.update', $siswa->nis) }}" id="myForm">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input type="text" name="nis" class="form-control" id="nis" value="{{ $siswa->nis }}" aria-describedby="nis" >
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" value="{{ $siswa->nama }}" aria-describedby="nama" >
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" aria-describedby="tanggal_lahir" >
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <input type="jk" name="jk" class="form-control" id="jk" value="{{ $siswa->jk }}" aria-describedby="jk" >
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="jurusan" name="jurusan" class="form-control" id="jurusan" value="{{ $siswa->jurusan }}" aria-describedby="jurusan" >
                            </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
