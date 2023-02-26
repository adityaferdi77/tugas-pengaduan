@extends('layouts.index')

@section('title', ' Daftar Petugas | Sistem Pengaduan Masyarakat')
@section('content')
    <div class="container mr-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-header">
                        Form Edit Petugas
                    </div>
                    <div class="card-body">
                        <form action="{{ route('petugas.update', $petugas->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="nama_petugas">Nama Petugas</label>
                                <input type="text" value="{{ $petugas->nama_petugas }}" name="nama_petugas"
                                    id="nama_petugas" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" value="{{ $petugas->username }}" name="username" id="username"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="no_telp">NO Telepon</label>
                                <input type="number" readonly value="{{ $petugas->no_telp }}" name="no_telp" id="no_telp"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="level">level</label>
                                <div class="input-group mb-3">
                                    <select name="level" id="level" class="custom-select">
                                        @if ($petugas->level == 'admin')
                                            <option selected value="admin">Admin</option>
                                            <option value="petugas">Petugas</option>
                                        @else
                                            <option value="admin">Admin</option>
                                            <option selected value="petugas">Petugas</option>
                                        @endif

                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning text-white" style="width: 100%">UPDATE</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endsection
