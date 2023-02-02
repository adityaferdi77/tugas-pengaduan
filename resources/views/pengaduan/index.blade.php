@extends('layout')

@section('title', ' Daftar Pengaduan | Sistem Pengaduan Masyarakat')
@section('content')
<div class="container mt-5">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header text-center">
                    <strong>Daftar Pengaduan Yang Masuk</strong>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Pengaduan</th>
                                    <th>Nama Pelapor</th>
                                    <th>Tanggal Pengaduan</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pengaduan as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->judul_pengaduan}}</td>
                                    <td>{{$item->masyarakat->nama}}</td>
                                    <td>{{$item->tanggal_pengaduan}}</td>
                                    <td>
                                        @if ($item->status === '0')
                                        <div class="badge badge-danger">Belum Terverifikasi</div>
                                    </td>
                                    @elseif($item->status == 'proses')
                                    <div class="badge badge-warning text-white">Sedang Di Proses</div>
                                    </td>
                                    @else
                                    <div class="badge badge-success">Selesai</div>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($item->status === '0' || $item->status == 'proses')
                                        <a href="{{route('pengaduan.show', \Crypt::Encrypt($item->id))}}"
                                            class="btn btn-sm btn-success mx-2 my-2">Beri Tanggapan</a>
                                        @endif
                                        <a href="{{route('pengaduan.detail', \Crypt::Encrypt($item->id))}}"
                                            class="btn btn-sm btn-primary mx-2 my-2">Detail</a>
                                        
                                    </td>
                                </tr>
                                {{ $pengaduan->links() }}
                                @empty
                                <tr>
                                    <td class="text-center" colspan="6">Data Pengaduan Tidak tersedia</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
