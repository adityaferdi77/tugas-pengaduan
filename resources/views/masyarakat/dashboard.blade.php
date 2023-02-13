@extends('layouts.index')

@section('title', 'Dashboard')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-header">
                        <strong>Selamat datang, {{ \Auth::guard('masyarakat')->user()->nama }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="jeg_main_content col-md-12">


                            <div class="entry-header">
                                <h1 class="jeg_post_title">Layanan Pengaduan Masyarakat</h1>


                            </div>

                            <div class="jeg_featured featured_image"></div>

                            <div class="entry-content ">

                                <div class="content-inner">
                                    <p><strong>Deskripsi</strong></p>
                                    <p>Pengaduan masyarakat adalah penyampaian keluhan oleh masyarakat kepada pemerintah
                                        atas pelayanan yang tidak sesuai dengan standar pelayanan, atau pengabaian kewajiban
                                        dan/atau pelanggaran larangan. Penanganan pengaduan masyarakat adalah proses
                                        kegiatan yang meliputi penerimaan, pencatatan, penelaahan, tindak lanjut penyaluran
                                        tindaklanjut, pengarsipan, pemantauan dan pelaporan. Pengadu adalah seluruh pihak
                                        baik warganegara maupun penduduk baik orang perorangan, kelompok maupun badan hukum
                                        yang menyampaikan pengaduan kepada Pengelola pengaduan pelayanan publik. Masyarakat
                                        adalah seluruh pihak, baik warga negara maupun penduduk, kelompok, maupun badan
                                        hukum yang berkedudukan sebagai penerima manfaat pelayanan di bidang Komunikasi dan
                                        informatika, baik secara langsung maupun tidak langsung.</p>
                                    <p><strong>Syarat Layanan</strong></p>
                                    <p>a. Dokumen/berkas pendukung<br>
                                        b. Tanda pengenal/identitas</p>
                                    <p><strong>Biaya</strong></p>
                                    <p>Gratis </p>
                                    <p><strong>Prosedur</strong></p>
                                    <p>a. Tamu/pengguna layanan menuju ke desk petugas pelayanan informasi;<br>
                                        b. Menyampaikan pengaduan, mengisi buku tamu dan melampirkan identitas;<br>
                                        c. Menerima informasi dari petugas;<br>
                                        d. Menerima layanan pengaduan.</p>
                                    <p><strong>Jangka Waktu Penyelesaian</strong></p>
                                    <p>8 Hari Kerja</p>
                                    <p><strong>Produk Pelayanan</strong></p>
                                    <p>Permohonan pengaduan masyarakat yang ditindaklanjuti</p>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
