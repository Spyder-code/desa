<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function pekerjaan()
    {
        $data = Penduduk::all()->where('jenis','pekerjaan');
        return view('admin.penduduk.pekerjaan',compact('data'));
    }
    public function umur()
    {
        $data = Penduduk::all()->where('jenis','umur');
        return view('admin.penduduk.umur',compact('data'));
    }
    public function pendidikan()
    {
        $data = Penduduk::all()->where('jenis','pendidikan');
        return view('admin.penduduk.pendidikan',compact('data'));
    }
    public function dusun()
    {
        $data = Penduduk::all()->where('jenis','dusun');
        return view('admin.penduduk.dusun',compact('data'));
    }
    public function perkawinan()
    {
        $data = Penduduk::all()->where('jenis','perkawinan');
        return view('admin.penduduk.perkawinan',compact('data'));
    }
    public function agama()
    {
        $data = Penduduk::all()->where('jenis','agama');
        return view('admin.penduduk.agama',compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required',
        ]);

        Penduduk::create([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'jenis' => $request->jenis,
        ]);

        return back()->with('success','Data berhasil ditambahkan!');
    }

    public function destroy(Penduduk $penduduk)
    {
        Penduduk::destroy($penduduk->id);
        return back()->with('success','Data berhasil dihapus!');
    }
}
