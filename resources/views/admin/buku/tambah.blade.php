@extends('admin.master')
@section('content')

    <div class="panel panel-default">
        <div align="center" font="7" class="panel-heading">
        <p>Tambah Data</p>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">

                    <form method="POST">
                        <div class="form-group">
                            <label>Judul</label>
                            <input class="form-control" name="judul" />
                        </div>

                        <div class="form-group">
                            <label>Pengarang</label>
                            <input class="form-control" name="pengarang" />
                        </div>

                        <div class="form-group">
                            <label>Penerbit</label>
                            <input class="form-control" name="penerbit" />
                        </div>

                        <div class="form-group">
                            <label>Tahun Terbit</label>
                            <select class="form-control" name="tahun">
                                <?php
                                    $tahun = date("Y");
                                    for ($i=$tahun - 29; $i <= $tahun; $i++) {
                                        echo '
                                            <option value="'.$i.'">'.$i.'</option>
                                        ';
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>ISBN</label>
                            <input class="form-control" name="isbn" />
                        </div>

                        <div class="form-group">
                            <label>Jumlah Buku</label>
                            <input class="form-control" type="number" name="jumlah" />
                        </div>

                        <div class="form-group">
                            <label>Lokasi</label>
                            <select class="form-control" name="lokasi">
                                <option value="rak1">Rak 1</option>
                                <option value="rak2">Rak 2</option>
                                <option value="rak3">Rak 3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Input</label>
                            <input class="form-control" name="tanggal" type="date" />
                        </div>

                        <div>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
