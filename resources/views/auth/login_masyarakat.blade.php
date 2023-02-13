@extends('layoutdas')

@section('title', 'Login Masyarakat | Sistem Pengaduan Masyarakat')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Log In / Sign Up | Pengaduan Masyarakat</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
        <link rel="stylesheet" href="{{ asset('stylelog.css') }}">
        <link rel="stylesheet" href="{{ asset('img/admin.css') }}" />
    </head>

    <body>
        <!-- partial:index.partial.html -->
        <div class="section">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                            <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                            <label for="reg-log"></label>
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                    @if (session('status'))
                                                        <div class="alert alert-success"><strong>{{session('status')}}</strong></div>
                                                    @endif
                                                    @if (session('danger'))
                                                        <div class="alert alert-danger"><strong>{{session('danger')}}</strong></div>
                                                    @endif
                                                <h4 class="mb-4 pb-3">Log In</h4>
                                                <form action="{{ url('/masyarakat/login') }}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text"
                                                            class="form-style @error('username') is-invalid @enderror"
                                                            name="username" placeholder="masukan username anda"
                                                            autocomplete="off">
                                                        <i class="input-icon uil uil-user"></i>
                                                        @error('username')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <input type="password" class="form-style" name="password"
                                                            placeholder="masukan password anda">
                                                        <i class="input-icon uil uil-lock-alt"></i>
                                                        @error('password')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn mt-4">Log in</button>
                                                    <a href="{{ url('/') }}" class="btn text-danger mt-4">Kembali</a>
                                                </form>
                                                    {{-- <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Sign Up</h4>
                                                <form action="{{ url('/masyarakat/register') }}" method="post">
                                                    @csrf
                                                    <div class="form-group mt-2">
                                                        <input type="number"
                                                            class="form-style @error('nik') is-invalid @enderror"
                                                            size="16" name="nik" placeholder="masukan NIK anda"
                                                            autocomplete="off" value="{{ old('nik') }}">
                                                        <i class="input-icon uil uil-location-arrow"></i>
                                                        @error('nik')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="text"
                                                            class="form-style @error('nama') is-invalid @enderror"
                                                            name="nama" placeholder="Nama" autocomplete="off"
                                                            value="{{ old('nama') }}">
                                                        <i class="input-icon uil uil-chat-bubble-user"></i>
                                                        @error('nama')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="number"
                                                            class="form-style @error('no_telp') is-invalid @enderror"
                                                            name="no_telp" placeholder="Nomor Telp" autocomplete="off"
                                                            value="{{ old('no_telp') }}">
                                                        <i class="input-icon uil uil-calling"></i>
                                                        @error('no_telp')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="text"
                                                            class="form-style @error('username') is-invalid @enderror"
                                                            name="username" placeholder="username" autocomplete="off">
                                                        <i class="input-icon uil uil-user"></i>
                                                        @error('username')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="password"
                                                            class="form-style @error('password') is-invalid @enderror"
                                                            name="password" placeholder="Password">
                                                        <i class="input-icon uil uil-lock-alt"></i>
                                                        @error('password')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="password"
                                                            class="form-style @error('password') is-invalid @enderror"
                                                            name="password_confirmation"
                                                            placeholder="Konfirmasi Password">
                                                        <i class="input-icon uil uil-lock-alt"></i>
                                                        @error('password')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn mt-4">Register</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>

@endsection
