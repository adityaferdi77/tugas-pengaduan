<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset ('assetstemp/img/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('assetstemp/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assetstemp/plugins/feather/feather.css')}}">
    <link rel="stylesheet" href="{{ asset ('assetstemp/plugins/icons/flags/flags.css')}}">
    <link rel="stylesheet" href="{{ asset ('assetstemp/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assetstemp/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assetstemp/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset ('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('temp/css/bootstrap.min.css')}}">
</head>

<body>

    <div class="main-wrapper">
          <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset ('img/logo-skarla.jpg')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

        <div class="header">
            @auth('masyarakat')
            <div class="header-left">
                <a href="masyarakat" class="logo">
                    <img src="{{ asset ('img/skarla.png')}}" alt="Logo">
                </a>
                <a href="masyarakat" class="logo logo-small">
                    <img src="{{ asset ('img/logo-skarla.jpg')}}" alt="Logo" width="30" height="30">
                </a>
                @endauth
                @auth('petugas')
            <div class="header-left">
                <a href="petugas" class="logo">
                    <img src="{{ asset ('img/skarla.png')}}" alt="Logo">
                </a>
                <a href="petugas" class="logo logo-small">
                    <img src="{{ asset ('img/logo-skarla.jpg')}}" alt="Logo" width="30" height="30">
                </a>
                @endauth
            </div>
            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

            <ul class="nav user-menu">
                </li>
                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{ asset ('assetstemp/img/profiles/avatar-01.jpg')}}" width="31"
                            @auth('petugas')    
                            alt="{{ \Auth::guard('petugas')->user()->nama_petugas }}">
                            <div class="user-text">
                                <h6>{{ \Auth::guard('petugas')->user()->nama_petugas }}</h6>
                                <p class="text-muted mb-0">Administrator</p>
                                @endauth
                                @auth('masyarakat')    
                            alt="{{ \Auth::guard('masyarakat')->user()->nama }}">
                            <div class="user-text">
                                <h6>{{ \Auth::guard('masyarakat')->user()->nama }}</h6>
                                <p class="text-muted mb-0">Masyarakat</p>
                                @endauth
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{ asset ('assetstemp/img/profiles/avatar-01.jpg')}}" alt="User Image"
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                @auth('petugas')
                                <h6>{{ \Auth::guard('petugas')->user()->nama_petugas }}</h6>
                                <p class="text-muted mb-0">Administrator</p>
                                @endauth
                                @auth('masyarakat')
                                <h6>{{ \Auth::guard('masyarakat')->user()->nama }}</h6>
                                <p class="text-muted mb-0">Masyarakat</p>
                                @endauth
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        @auth('masyarakat')
                        <a class="dropdown-item" href="{{url('masyarakat/logout')}}" onclick="return confirm('Apakah anda yakin ingin keluar ?')" class="btn btn-primary">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout</a>
                        @endauth
                        @auth('petugas')
                        <a class="dropdown-item" href="{{url('petugas/logout')}}" onclick="return confirm('Apakah anda yakin ingin keluar ?')" class="btn btn-primary">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout</a>
                        @endauth
                    </div>
                </li>

            </ul>

        </div>