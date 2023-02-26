@extends('layouts.index')

@section('title', 'Buat Pengaduan | Sistem Pengaduan Masyarakat')
@section('content')
  <div class="container mt-5">
    <div class="row mt-5 justify-content-center">
      <div class="col-md-8">
        @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
        @endif
        <div class="card shadow">
          <div class="card-header text-center">
              <strong>Tulis Pengaduan Anda</strong>
          </div>
          <div class="card-body">
              <form action="{{url('pengaduan')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="">Judul Pengaduan</label>
                  <input type="text" autocomplete="off" class="form-control @error('judul_pengaduan') is-invalid @enderror" name="judul_pengaduan" placeholder="Judul Pengaduan Anda" value="{{old('judul_pengaduan')}}">
                  @error('judul_pengaduan')
                    <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="">Lokasi Kejadian</label>
                    <input type="text" autocomplete="off" class="form-control @error('lokasi_kejadian') is-invalid @enderror" name="lokasi_kejadian" placeholder="Lokasi Kejadian Anda" value="{{old('lokasi_kejadian')}}">
                    @error('lokasi_kejadian')
                      <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>
                <div class="form-group">
                  <label for="">NIK</label>
                  <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{\Auth::guard('masyarakat')->user()->nik}}" readonly value="{{old('nik')}}">
                </div>
                <div class="form-group">
                  <label for="">Isi Laporan Anda</label>
                  <textarea name="isi_laporan" class="form-control @error('isi_laporan') is-invalid @enderror" id="" cols="30" rows="10"></textarea>
                  @error('isi_laporan')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
                </div>
                <div class="form-group">
                  <label for="foto" class="form-label">Kirim Foto :</label>
                  <img src="" alt="" class="img-preview img-fluid form-group col-sm-5" >
                  <input class="@error('foto') is-invalid @enderror" type="file" id="foto" name="foto" onchange="previewImage()" accept="image/*">
              </div>
                @error('foto')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
                <button type="submit" class="btn btn-primary">Kirim</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function previewImage() {
        const image = document.querySelector('#foto')
        const imgPreview = document.querySelector('.img-preview')
        
        imgPreview.style.display = 'block'

        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result
        }
    }
</script>
@endsection
