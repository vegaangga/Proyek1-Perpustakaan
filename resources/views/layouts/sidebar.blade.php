<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center" style="padding-left: 50px;">
                <img src="http://127.0.0.1:8000/img/logo-smk.png" class="user-image img-responsive">
            </li>
            <li style="margin-bottom: 13px;">
                <a href="http://127.0.0.1:8000" style="padding-right: 109px;padding-bottom: 25px;padding-top: 30px;"><i class="fa fa-dashboard fa-3x"></i>Dashboard</a>
            </li>
            <li style="margin-bottom: 8px;">
                <a href="http://127.0.0.1:8000/anggota" style="padding-right: 43px;padding-bottom: 20px;"><i class="fa fa-users fa-3x"></i>Data Anggota</a>
            </li>
            <li>
                <a  href="{{url('buku')}}"><i class="fa fa-table fa-3x"></i>Data Buku</a>
            </li>
             <li>
                <a  href="{{url('transaksi')}}"><i class="fa fa-edit fa-3x"></i>Transaksi</a>
            </li>
            <li>
                <a  href="{{url('laporan')}}"><i class="fa fa-book fa-3x"></i>Laporan</a>
            </li>

        </ul>

    </div>

</nav>