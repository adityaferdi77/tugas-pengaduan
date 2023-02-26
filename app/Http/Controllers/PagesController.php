<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Tanggapan;

class PagesController extends Controller
{
    public function index()
    {
        // if(\Auth::guard('petugas')){
        //     return redirect('home/petugas');
        // }else if(\Auth::guard('masyarakat')){
        //     return redirect('home/masyarakat');
        // }
        return view('home');
    }

    public function dashboard_masyarakat()
    {
        $masyarakat = Masyarakat::get();
        $pengaduan = Pengaduan::where('status','0')->get();
        $proses = Pengaduan::where('status','proses')->get();
        $tanggapan = tanggapan::get();

        return view('masyarakat.dashboard', [
            'jml_masyarakat' => $masyarakat->count(),
            'jml_pengaduan'=> $pengaduan->count(),
            'jml_tanggapan'=> $tanggapan->count(),
            'jml_proses'=> $proses->count(),
            'jml_aduan_ku'=> $pengaduan,
        ]);
    }
    public function dashboard_petugas()
    {
        $masyarakat = Masyarakat::get();
        $pengaduan = Pengaduan::where('status','0')->get();
        $proses = Pengaduan::where('status','proses')->get();
        $tanggapan = tanggapan::get();

        return view('petugas.dashboard', [
            'jml_masyarakat' => $masyarakat->count(),
            'jml_pengaduan'=> $pengaduan->count(),
            'jml_tanggapan'=> $tanggapan->count(),
            'jml_proses'=> $proses->count(),
            'jml_aduan_ku'=> $pengaduan,
        ]);
    }
}
