<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
<!-- Dashboard -->
  <link rel="stylesheet" type="text/css" href="{{ asset ('temp/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset ('temp/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset ('temp/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset ('temp/css/style.css')}}">
<LINK rel="stylesheet" type="text/css" href="{{ asset ('style.css')}}">
</head>
<body>
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" >
                <img src="https://i.postimg.cc/KY7c0Xm2/1675220753825.png" alt="...">
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    @auth('masyarakat')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('home/masyarakat')}}">
                            <i class="bi bi-house"></i> Beranda
                        </a>
                        @endauth
                        @auth('petugas')
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('home/petugas')}}">
                                <i class="bi bi-house"></i> Beranda
                            </a>
                    </li>
                    @endauth
                    @auth('masyarakat')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('pengaduan')}}">
                            <i class="bi bi-bar-chart"></i> Data Pengaduan
                        </a>
                    </li>
                    @endauth
                    @auth('petugas')
            @if (auth()->guard('petugas')->user()->level === 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('petugas')}}">
                            <i class="bi bi-chat"></i> Data Petugas
                        </a>
                    </li>
                    @endif
                    @endauth
                    @auth('petugas')
          @if (auth()->guard('petugas')->user()->level === 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('report')}}">
                            <i class="bi bi-bookmarks"></i> Laporan
                        </a>
                    </li>
                    @endif
                    @endauth
                    @auth('petugas')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('pengaduan')}}">
                            <i class="bi bi-people"></i> Data Pengaduan
                        </a>
                    @endauth
                    @auth('masyarakat')
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('pengaduan/create')}}">
                            <i class="bi bi-people"></i> Buat Pengaduan
                        </a>
                    </li>
                    @endauth
                </ul>
                <!-- Divider -->
                <hr class="navbar-divider my-5 opacity-20">
                <!-- Push content down -->
                <div class="mt-auto"></div>
                <!-- User (md) -->
                @auth('masyarakat')
                <div class="need-btn">
                    <a href="{{url('masyarakat/logout')}}" onclick="return confirm('Apakah anda yakin ingin keluar ?')" class="btn btn-primary">Logout</a>
                </div>
                @endauth
                @auth('petugas')
                <div class="need-btn">
                    <a href="{{url('petugas/logout')}}" onclick="return confirm('Apakah anda yakin ingin keluar ?')" class="btn btn-primary">Logout</a>
                </div>
                @endauth
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Main content -->
    {{-- <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">Application</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                    </ul>
                </div>
            </div>
        </header>
    </div> --}}
    <script src="{{asset('assets/jquery-3.5.1.slim.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>
</div>
</body>
</html>