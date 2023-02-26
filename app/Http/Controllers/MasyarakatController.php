<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Hash;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return masyarakat::all();
        return view('masyarakat.index', [
            'masyarakat' => Masyarakat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masyarakat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:masyarakat',
            'nama' => 'required',
            'password' => 'required|confirmed',
            'no_telp' => 'required|max:13|min:11',
        ]);
        Masyarakat::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'no_telp' => $request->no_telp,
        ]);
        return redirect('masyarakat')->with('status', 'Registrasi berhasil, Siliahkan login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $masyarakat = Masyarakat::where('id', $id)->first();

        return view('masyarakat.edit', ['masyarakat' => $masyarakat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $masyarakat = Masyarakat::find($id);

        $masyarakat->update([
            'nama' => $data['nama'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'no_telp' =>  $data['no_telp'],
        ]);

        return redirect()->route('masyarakat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Masyarakat::destroy($id);
        return redirect()->back()->with('status', 'Data masyarakat Berhasil dihapus');
    }
}
