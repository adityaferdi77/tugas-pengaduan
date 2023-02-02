@extends('layoutdas')

@section('title', 'Login Masyarakat | Sistem Pengaduan Masyarakat')
@section('content')
<link rel="stylesheet" href="{{ asset ('img/login.css')}}" />
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        @if (session('status'))
            <div class="alert alert-success"><strong>{{session('status')}}</strong></div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger"><strong>{{session('danger')}}</strong></div>
        @endif
        <div class="account-box">
          <div class="login-header">
        <div class="card shadow">
          <div class="card-header">
             <center> <strong>Login Masyarakat</strong></center>
          </div>
          <div class="card-body">
              <form action="{{url('/masyarakat/login')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="masukan username anda" autocomplete="off">
                  @error('username')
                      <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <label for="username">Password</label>
                <input type="password" class="form-control" name="password" placeholder="masukan password anda">
                @error('password')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
                <button type="submit" class="btn btn-info text-white mt-2">Login</button>
                <a href="{{url('/')}}" class="btn btn-danger text-white mt-2">Kembali</a>
                <a href="{{url('masyarakat/register')}}" class="my-2 float-right">Belum Punya Akun ?</a>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
