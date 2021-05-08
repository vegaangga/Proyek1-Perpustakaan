<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="http://127.0.0.1:8000/img/logo-smk.png" class="user-image img-responsive">
            </li>
            @php $a = Auth::user()->role_id ; @endphp

            @if($a == 0 || $a == 1)
                <li>
                    <a href={{url('/dashboard')}} ><i class="fa fa-dashboard fa-3x"></i>Dashboard</a>
                </li>
            @endif
            @if($a == 0 )
            <li>
                <a href="{{url('admin')}}"><i class="fa fa-users fa-3x"></i>Data Admin</a>
            </li>
            @endif
            @if($a == 0 || $a == 1)
            <li>
                <a href="{{url('anggota')}}"><i class="fa fa-users fa-3x"></i>Data Anggota</a>
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
            @endif

            @if($a == 2 )
            <li>
                <a  href="{{url('laporan')}}"><i class="fa fa-book fa-3x"></i>Profile</a>
            </li>
            <li>
                <a  href="{{url('katalog')}}"><i class="fa fa-book fa-3x"></i>Katalog</a>
            </li>
            <li>
                <a  href="{{url('laporan')}}"><i class="fa fa-book fa-3x"></i>History</a>
            </li>
            @endif
        </ul>

    </div>

</nav>
