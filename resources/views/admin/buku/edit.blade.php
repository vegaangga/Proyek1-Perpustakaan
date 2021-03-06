@extends('admin.master')
@section('content')
<div class="panel panel-default">
    <div align="center" font="7" class="panel-heading">
        Ubah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form method="POST" action="{{ route('buku.update', $Buku->id) }}" id="myForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" name="judul" value="{{$Buku->judul}}" />

                    </div>

                    <div class="form-group">
                        <label>Pengarang</label>
                        <input class="form-control" name="pengarang" value="{{$Buku->pengarang}}" />

                    </div>

                    <div class="form-group">
                        <label>Penerbit</label>
                        <input class="form-control" name="penerbit" value="{{$Buku->penerbit}}" />

                    </div>

                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <input class="form-control" type="date" name="tahun" value="{{$Buku->tahun_terbit}}" />
                    </div>

                    <div class="form-group">
                        <label>ISBN</label>
                        <input class="form-control" name="isbn" value="{{$Buku->isbn}}" />

                    </div>

                    <div class="form-group">
                        <label>Jumlah Buku</label>
                        <input class="form-control" type="number" name="jumlah" value="{{$Buku->jumlah_buku}}" />

                    </div>

                    <div class="form-group">
                        <label>Lokasi</label>
                        <select class="form-control" name="lokasi">
                            <option value="rak1" <?php if ($Buku->lokasi =='rak1') {
                                echo "selected";} ?>>Rak 1</option>
                            <option value="rak2" <?php if ($Buku->lokasi =='rak2') {
                                echo "selected";} ?>>Rak 2</option>
                            <option value="rak3" <?php if ($Buku->lokasi =='rak3') {
                                echo "selected";} ?>>Rak 3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Input</label>
                        <input class="form-control" name="tanggal" type="date" value="{{$Buku->tgl_input}}" />

                    </div>

                    </div>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

            </div>
        </div>
    </form>
    </div>
</div>


@endsection
