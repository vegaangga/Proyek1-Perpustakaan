<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
            <img src="http://127.0.0.1:8000/img/logo-smk.png" class="user-image img-responsive"/>
            </li>
            <li>
                <a  href="{{ route('siswa.index',$siswa->nis) }}"><i class="fa fa-dashboard fa-3x"></i> Profil</a>
            </li>
             <li>
                <a  href="{{ route('siswa.katalog',$siswa->nis) }}"><i class="fa fa-users fa-3x"></i> Katalog Buku</a>
            </li>
             <li>
                <a  href="{{ route('siswa.show',$siswa->nis) }}"><i class="fa fa-table fa-3x"></i> Riwayat Peminjaman</a>
            </li>
        </ul>

    </div>

</nav>
