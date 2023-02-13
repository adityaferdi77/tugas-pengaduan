@include('layouts.header')
@include('layouts.footer')
<LINK rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                {{-- <li class="menu-title">
                    <span>Main Menu</span>
                </li> --}}
                @auth('masyarakat')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('home/masyarakat') }}">
                            <i class="bi bi-house"></i><span> Beranda</span>
                        </a>
                    @endauth
                    @auth('petugas')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('home/petugas') }}">
                            <i class="bi bi-house"></i><span> Beranda</span>
                        </a>
                    </li>
                @endauth
                @auth('masyarakat')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pengaduan') }}">
                            <i class="bi bi-bar-chart"></i><span> Data Pengaduan</span>
                        </a>
                    </li>
                @endauth
                @auth('petugas')
                    @if (auth()->guard('petugas')->user()->level === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('petugas') }}">
                                <i class="bi bi-chat"></i><span> Data Petugas</span>
                            </a>
                        </li>
                    @endif
                @endauth
                @auth('petugas')
                    @if (auth()->guard('petugas')->user()->level === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('report') }}">
                                <i class="bi bi-bookmarks"></i><span> Laporan</span>
                            </a>
                        </li>
                    @endif
                @endauth
                @auth('petugas')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pengaduan') }}">
                            <i class="bi bi-people"></i><span> Data Pengaduan</span>
                        </a>
                    @endauth
                    @auth('masyarakat')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pengaduan/create') }}">
                            <i class="bi bi-people"></i><span> Buat Pengaduan</span>
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</div>

@yield('content')
@include('layouts.footer')
<script src="{{ asset('assetstemp/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assetstemp/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assetstemp/js/feather.min.js') }}"></script>
<script src="{{ asset('assetstemp/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assetstemp/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('assetstemp/plugins/apexchart/chart-data.js') }}"></script>
<script src="{{ asset('assetstemp/js/script.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
</body>

</html>
