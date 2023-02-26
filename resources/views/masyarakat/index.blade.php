@extends('layouts.index')

@section('title', ' Daftar masyarakat | Sistem Pengaduan Masyarakat')
@section('content')
<div class="container mt-5">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <div class="card shadow">
                <div class="card-header text-center">
                    <strong>Daftar masyarakat</strong>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama masyarakat</th>
                                    <th>No Telp</th>
                                    <th>Level</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @forelse ($masyarakat as $item)
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->no_telp}}</td>
                                    <td>User</td>
                                    <td>
                    <form action="{{ route('masyarakat.destroy', $item->id) }}" class="d-inline-block" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus ?')" class="btn btn-danger bi bi-trash" ></button>
                    </form>
                </td>
                                 </tr>
                                @empty
                                    <tr >
                                        <td colspan="5"></td>
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
