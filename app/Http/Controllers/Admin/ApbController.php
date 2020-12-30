<?php

namespace App\Http\Controllers\Admin;

use App\Apb;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Apb::all();
        return view('admin.pembangunan.apb.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pembangunan.apb.create');
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
            'anggaran' => 'required',
            'realisasi' => 'required',
            'defisit' => 'required',
            'sumber' => 'required',
        ]);

        Apb::create([
            'bidang' => $request->bidang,
            'kegiatan' => $request->kegiatan,
            'anggaran' =>$request->anggaran,
            'realisasi' =>$request->realisasi,
            'defisit' =>$request->defisit,
            'sumber' => $request->sumber,
        ]);

        return redirect()->route('apb.index')->with('success','Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apb  $apb
     * @return \Illuminate\Http\Response
     */
    public function show(Apb $apb)
    {
        return view('admin.pembangunan.apb.show',compact('apb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apb  $apb
     * @return \Illuminate\Http\Response
     */
    public function edit(Apb $apb)
    {
        return view('admin.pembangunan.apb.edit',compact('apb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apb  $apb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apb $apb)
    {
        $request->validate([
            'bidang' => 'required',
            'kegiatan' => 'required',
            'anggaran' => 'required',
            'realisasi' => 'required',
            'defisit' => 'required',
            'sumber' => 'required',
        ]);

        Apb::find($apb->id)->update([
            'bidang' => $request->bidang,
            'kegiatan' => $request->kegiatan,
            'anggaran' =>$request->anggaran,
            'realisasi' =>$request->realisasi,
            'defisit' =>$request->defisit,
            'sumber' => $request->sumber,
        ]);

        return redirect()->route('apb.index')->with('success','Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apb  $apb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apb $apb)
    {
        Apb::destroy($apb->id);
        return redirect()->route('apb.index')->with('success','Data berhasil dihapus!');
    }
}
