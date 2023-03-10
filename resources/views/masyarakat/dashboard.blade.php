@extends('layouts.index')

@section('title', 'Dashboard')
@section('content')

        <!--Basic alerts-->
        {{-- <div class="alert alert-warning">Selamat senang <b>{{ auth()->guard('masyarakat')->user()->nama }}</b></div> --}}
        <div class="container mr-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class="alert alert-warning">Selamat datang, <b>{{ auth()->guard('masyarakat')->user()->nama }}</b></div>
                        </div>
                        <div class="row d-flex justify-content-center">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box glass-card mb-3">
                              <span class="info-box-icon bg-pink elevation-1"><i class="fas fa-user"></i></span>
                
                              <div class="info-box-content">
                                <span class="info-box-text">Pengaduan Masuk</span>
                                <span class="info-box-number">{{ number_format($jml_pengaduan) }} <i class="font-weight-light">pengaduan</i></span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                          <!-- /.col -->
                          <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box glass-card mb-3">
                              <span class="info-box-icon bg-pink elevation-1"><i class="fas fa-spinner"></i></span>
                
                              <div class="info-box-content">
                                <span class="info-box-text">Pengaduan diProses</span>
                                <span class="info-box-number">{{ number_format($jml_proses) }} <i class="font-weight-light">pengaduan</i></span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                          <!-- /.col -->
                          <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box glass-card mb-3">
                              <span class="info-box-icon bg-pink elevation-1"><i class="fas fa-comments"></i></span>
                
                              <div class="info-box-content">
                                <span class="info-box-text">Ditanggapi</span>
                                <span class="info-box-number">{{ number_format($jml_tanggapan) }} <i class="font-weight-light">pengaduan</i></span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
    
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
