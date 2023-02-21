@extends('layoutdas')

@section('title', 'Login Petugas | Sistem Pengaduan Masyarakat')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>CodePen - Log In / Sign Up | Nothing4us</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
        <link rel="stylesheet" href="{{ asset('stylelog.css') }}">
        <link rel="stylesheet" href="{{ asset('img/login.css') }}" />
    </head>

    <body>
        <div class="section">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            @if (session('status'))
                                                <div class="alert alert-danger">{{ session('status') }}</div>
                                            @endif
                                            @if (session('danger'))
                                                <div class="alert alert-danger">{{ session('danger') }}</div>
                                            @endif
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Log In</h4>
                                                <form action="{{ url('/petugas/login') }}" method="post">
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
                                                    <div class="form-group mt-2">
                                                        <input type="password" class="form-style" name="password"
                                                            placeholder="masukan password anda">
                                                        <i class="input-icon uil uil-lock-alt"></i>
                                                        @error('password')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <button type="submit" class="btn mt-4">Log in</button>
                                                    <a href="{{ url('/') }}" class="btn text-danger mt-4">Kembali</a>
                                                    {{-- <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p> --}}
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
