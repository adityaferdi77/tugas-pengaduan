@extends('layoutdas')

@section('title', 'Sistem Pengaduan Masyarakat')
@section('content')
<link rel="stylesheet" href="img/home.css" />
  <div class="container mt-5">
    <div class="row mt-5 justify-content-center">
      <div class="col-md-6">
        <div class="account-box">
          <div class="login-header">
        <div class="card shadow">
          <div class="card-body bg-black text-white"><center>
              <marquee behavior="" direction="">
                <h4 class="fw-bold">
                    <span class="text-brand text-warning">Pengaduan masyarakat adalah penyampaian keluhan oleh masyarakat kepada pemerintah atas pelayanan yang tidak sesuai dengan standar pelayanan, atau pengabaian kewajiban dan/atau pelanggaran larangan.</span>
                </h4>
              </marquee>
          </center></div>
          {{-- <div class="card-body bg-black text-warning">
          <marquee direction="up" scrollamount="2" behavior="alternate" width="90%"><marquee direction="right" behavior="alternate"> Silahkan Masukan Akun Anda </marquee></marquee>
        </div> --}}
          <div class="card-body mx-auto">
              <a href="{{url('/masyarakat/login')}}" class="btn btn-danger text-white">Login Masyarakat</a>
              <a href="{{url('/petugas/login')}}" class="btn btn-info text-white">Login Petugas</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
