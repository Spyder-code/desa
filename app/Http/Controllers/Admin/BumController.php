<?php

namespace App\Http\Controllers\Admin;

use App\Bum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bum::all();
        return view('admin.bum.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bum.create');
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
            'saldo' => 'required',
            'tahun' => 'required',
        ]);

        Bum::create([
            'nama' => $request->nama,
            'saldo' => $request->saldo,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('bum.index')->with('success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bum  $bum
     * @return \Illuminate\Http\Response
     */
    public function show(Bum $bum)
    {
        return view('admin.bum.show',compact('bum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bum  $bum
     * @return \Illuminate\Http\Response
     */
    public function edit(Bum $bum)
    {
        return view('admin.bum.edit',compact('bum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bum  $bum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bum $bum)
    {
        $request->validate([
            'nama' => 'required',
            'saldo' => 'required',
            'tahun' => 'required',
        ]);

        Bum::find($bum->id)->update([
            'nama' => $request->nama,
            'saldo' => $request->saldo,
            'tahun' => $request->tahun,
        ]);

        return redirect()->route('bum.index')->with('success','Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bum  $bum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bum $bum)
    {
        Bum::destroy($bum->id);
        return redirect()->route('bum.index')->with('success','Data berhasil dihapus!');
    }
}
