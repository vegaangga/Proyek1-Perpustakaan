<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="http://127.0.0.1:8000/img/logo-smk.png" class="user-image img-responsive">
            </li>
            <li>
                <a href="http://127.0.0.1:8000" ><i class="fa fa-dashboard fa-3x"></i>Dashboard</a>
            </li>
            <li>
                <a href="http://127.0.0.1:8000/anggota" ><i class="fa fa-users fa-3x"></i>Data Anggota</a>
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