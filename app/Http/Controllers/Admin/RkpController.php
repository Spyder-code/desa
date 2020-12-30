<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Rkp;
use Illuminate\Http\Request;

class RkpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rkp::all();
        return view('admin.pembangunan.rkp.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pembangunan.rkp.create');
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
            'bidang' => 'required',
            'kegiatan' => 'required',
            'lokasi' => 'required',
            'volume' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
            'sumber' => 'required',
            'pola' => 'required',
        ]);

        Rkp::create([
            'bidang' => $request->bidang,
            'kegiatan' => $request->kegiatan,
            'lokasi' => $request->lokasi,
            'volume' => $request->volume,
            'tahun' => $request->tahun,
            'jumlah' => $request->jumlah,
            'sumber' => $request->sumber,
            'pola' => $request->pola,
        ]);

        return redirect()->route('rkp.index')->with('success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rkp  $rkp
     * @return \Illuminate\Http\Response
     */
    public function show(Rkp $rkp)
    {
        return view('admin.pembangunan.rkp.show',compact('rkp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rkp  $rkp
     * @return \Illuminate\Http\Response
     */
    public function edit(Rkp $rkp)
    {
        return view('admin.pembangunan.rkp.edit',compact('rkp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rkp  $rkp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rkp $rkp)
    {
        $request->validate([
            'bidang' => 'required',
            'kegiatan' => 'required',
            'lokasi' => 'required',
            'volume' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
            'sumber' => 'required',
            'pola' => 'required',
        ]);

        Rkp::find($rkp->id)->update([
            'bidang' => $request->bidang,
            'kegiatan' => $request->kegiatan,
            'lokasi' => $request->lokasi,
            'volume' => $request->volume,
            'tahun' => $request->tahun,
            'jumlah' => $request->jumlah,
            'sumber' => $request->sumber,
            'pola' => $request->pola,
        ]);

        return redirect()->route('rkp.index')->with('success','Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rkp  $rkp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rkp $rkp)
    {
        Rkp::destroy($rkp->id);
        return redirect()->route('rkp.index')->with('success','Data berhasil dihapus!');
    }
}
