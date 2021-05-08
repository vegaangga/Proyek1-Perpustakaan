@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div align="center" class="panel-heading">
                    <h4>Ubah data Anggota</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">

                        <form method="POST" action="{{ route('anggota.update', $anggota->nis) }}" id="myForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>NISN</label>
                                <input class="form-control" name="nis" class="form-control" id="nis" value="{{ $anggota->nis }}" aria-describedby="nis" >
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" name="nama" class="form-control" id="nama" value="{{ $anggota->nama }}" aria-describedby="nama" >
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input class="form-control" name="tempat_lahir" class="form-control" id="tempat_lahir" value="{{ $anggota->tempat_lahir }}" aria-describedby="tempat_lahir" >
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" value="{{ $anggota->tanggal_lahir }}" aria-describedby="tanggal_lahir" >
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="Laki-laki" name="jk" <?php if ($anggota->jk =='Laki-laki') {
                                        echo "selected";}?> /> Laki-laki
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="Perempuan" name="jk" <?php if ($anggota->jk =='Perempuan') {
                                        echo "selected";}?> /> Perempuan
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Jurusan</label>
                                <select class="form-control" name="jurusan">
                                    <option value="Teknik Elektro" <?php if ($anggota->jurusan =='Teknik Elektro') {
                                        echo "selected";} ?>>Teknik Elektro</option>
                                    <option value="Teknik Mesin" <?php if ($anggota->jurusan =='Teknik Mesin') {
                                        echo "selected";} ?>>Teknik Mesin</option>
                                    <option value="Teknologi Informasi" <?php if ($anggota->jurusan =='Teknologi Informasi') {
                                        echo "selected";} ?>>Teknologi Informasi</option>
                                    <option value="Teknik Sipil" <?php if ($anggota->jurusan =='Teknik Sipil') {
                                        echo "selected";} ?>>Teknik Sipil</option>
                                    <option value="Teknik Kimia" <?php if ($anggota->jurusan =='Teknik Kimia') {
                                        echo "selected";} ?>>Teknik Kimia</option>
                                    <option value="Akuntansi" <?php if ($anggota->jurusan =='Akuntansi') {
                                        echo "selected";} ?>>Akuntansi</option>
                                    <option value="Administrasi Niaga" <?php if ($anggota->jurusan =='Administrasi Niaga') {
                                        echo "selected";} ?>>Administrasi Niaga</option>
                                </select>
                            </div>

                            <div>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
