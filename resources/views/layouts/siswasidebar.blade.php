<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
        <li class="text-center">
            <img src="../img/logo-smk.png" class="user-image img-responsive"/>
            </li>
            <li>
                <a  href="{{url('/siswa/{nis}')}}"><i class="fa fa-dashboard fa-3x"></i> Profil</a>
            </li>
             <li>
                <a  href="{{url('/siswa/{nis}/katalog')}}"><i class="fa fa-users fa-3x"></i> Katalog Buku</a>
            </li>
             <li>
                <a  href="{{url('transaksi')}}"><i class="fa fa-table fa-3x"></i> Riwayat Peminjaman</a>
            </li>
        </ul>

    </div>

</nav>