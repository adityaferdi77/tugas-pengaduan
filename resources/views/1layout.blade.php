<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{ asset ('temp/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset ('temp/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset ('temp/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset ('temp/css/style.css')}}">
</head>
<body>
  <nav class="navbar shadow  navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div class="navbar-brand"><strong>S.Pengaduan Masyarakat</strong></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          @auth('masyarakat')
          <li class="nav-item">
            <a class="nav-link" href="{{url('home/masyarakat')}}">Beranda</a>
          </li>
          @endauth
          @auth('petugas')
          <li class="nav-item">
            <a class="nav-link" href="{{url('home/petugas')}}">Beranda</a>
          </li>
          @endauth
          @auth('masyarakat')
          <li class="nav-item">
            <a class="nav-link" href="{{url('pengaduan')}}">Data Pengaduan</a>
          </li>
          @endauth
          @auth('petugas')
            @if (auth()->guard('petugas')->user()->level === 'admin')
            <li class="nav-item">
              <a class="nav-link" href="{{url('petugas')}}">Master Data Petugas</a>
            </li>
            @endif
          @endauth
          @auth('petugas')
          @if (auth()->guard('petugas')->user()->level === 'admin')
          <li class="nav-item">
            <a class="nav-link" href="{{url('report')}}">Report</a>
          </li>
          @endif
        @endauth
          @auth('petugas')
          <li class="nav-item">
            <a class="nav-link" href="{{url('pengaduan')}}">Data Pengaduan</a>
          </li>
          @endauth
          @auth('masyarakat')
            <li class="nav-item">
              <a class="nav-link" href="{{url('pengaduan/create')}}">Buat Pengaduan</a>
            </li>
          @endauth
          @auth('masyarakat')
          <li class="nav-item">
            <a class="nav-link" href="{{url('masyarakat/logout')}}">Logout</a>
          </li>
          @endauth
          @auth('petugas')
          <li class="nav-item">
            <a class="nav-link" href="{{url('petugas/logout')}}">Logout</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  @yield('content')

  <footer>
    <div class="container ">
      <div class="row text-center py-4">
        <div class="col text-primary">
            &copy; {{date('Y')}} Pengaduan Masyarakat created by Ferdy <span style="color: #f57d00;">&#10084;</span>
        </div>
      </div>
    </div>
  </footer>
  <script src="{{asset('assets/jquery-3.5.1.slim.min.js')}}"></script>
  <script src="{{asset('assets/bootstrap.bundle.min.js')}}"></script>
</body>
</html>