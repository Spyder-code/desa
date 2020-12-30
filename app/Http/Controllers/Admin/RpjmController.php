<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Rpjm;
use Illuminate\Http\Request;

class RpjmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rpjm::all();
        return view('admin.pembangunan.rpjm.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pembangunan.rpjm.create');
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
            'sub_bidang' => 'required',
            'kegiatan' => 'required',
            'lokasi' => 'required',
            'volume' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
            'sumber' => 'required',
            'pola' => 'required',
        ]);

        Rpjm::create([
            'bidang' => $request->bidang,
            'sup_bidang' => $request->sub_bidang,
            'kegiatan' => $request->kegiatan,
            'lokasi' => $request->lokasi,
            'volume' => $request->volume,
            'tahun' => $request->tahun,
            'jumlah' => $request->jumlah,
            'sumber' => $request->sumber,
            'pola' => $request->pola,
        ]);

        return redirect()->route('rpjm.index')->with('success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rpjm  $rpjm
     * @return \Illuminate\Http\Response
     */
    public function show(Rpjm $rpjm)
    {
        return view('admin.pembangunan.rpjm.show',compact('rpjm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rpjm  $rpjm
     * @return \Illuminate\Http\Response
     */
    public function edit(Rpjm $rpjm)
    {
        return view('admin.pembangunan.rpjm.edit',compact('rpjm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rpjm  $rpjm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rpjm $rpjm)
    {
        $request->validate([
            'bidang' => 'required',
            'sub_bidang' => 'required',
            'kegiatan' => 'required',
            'lokasi' => 'required',
            'volume' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
            'sumber' => 'required',
            'pola' => 'required',
        ]);

        Rpjm::find($rpjm->id)->update([
            'bidang' => $request->bidang,
            'sup_bidang' => $request->sub_bidang,
            'kegiatan' => $request->kegiatan,
            'lokasi' => $request->lokasi,
            'volume' => $request->volume,
            'tahun' => $request->tahun,
            'jumlah' => $request->jumlah,
            'sumber' => $request->sumber,
            'pola' => $request->pola,
        ]);

        return redirect()->route('rpjm.index')->with('success','Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rpjm  $rpjm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rpjm $rpjm)
    {
        Rpjm::destroy($rpjm->id);
        return redirect()->route('rpjm.index')->with('success','Data berhasil dihapus!');
    }
}
