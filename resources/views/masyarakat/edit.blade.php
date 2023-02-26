@extends('layouts.index')

@section('title', ' Daftar masyarakat | Sistem Pengaduan Masyarakat')
@section('content')
    <div class="container mr-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-header">
                        Form Edit Masyarakat
                    </div>
                    <div class="card-body">
                        <form action="{{ route('masyarakat.update', $masyarakat->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="nama_masyarakat">Nama Masyarakat</label>
                                <input type="text" value="{{ $masyarakat->nama }}" name="nama_masyarakat"
                                    id="nama_masyarakat" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" value="{{ $masyarakat->username }}" name="username" id="username"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="no_telp">NO Telepon</label>
                                <input type="number" readonly value="{{ $masyarakat->no_telp }}" name="no_telp" id="no_telp"
                                    class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-warning text-white" style="width: 100%">UPDATE</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endsection
