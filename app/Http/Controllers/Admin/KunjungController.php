<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kunjung;
use Illuminate\Http\Request;

class KunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kunjung::all();
        return view('admin.kunjung.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kunjung.create');
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
            'nama' => 'required',
            'kegiatan' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
        ]);

        Kunjung::create([
            'nama' => $request->nama,
            'kegiatan' => $request->kegiatan,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('kunjung.index')->with('success','Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kunjung  $kunjung
     * @return \Illuminate\Http\Response
     */
    public function show(Kunjung $kunjung)
    {
        return view('admin.kunjung.show',compact('kunjung'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kunjung  $kunjung
     * @return \Illuminate\Http\Response
     */
    public function edit(Kunjung $kunjung)
    {
        return view('admin.kunjung.edit',compact('kunjung'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kunjung  $kunjung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kunjung $kunjung)
    {
        $request->validate([
            'nama' => 'required',
            'kegiatan' => 'required',
            'jumlah' => 'required',
        ]);

        Kunjung::find($kunjung->id)->update([
            'nama' => $request->nama,
            'kegiatan' => $request->kegiatan,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('kunjung.index')->with('success','Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kunjung  $kunjung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kunjung $kunjung)
    {
        Kunjung::destroy($kunjung->id);
        return redirect()->route('kunjung.index')->with('success','Data berhasil dihapus!');
    }
}
