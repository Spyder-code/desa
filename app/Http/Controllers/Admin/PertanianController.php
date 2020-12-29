<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pertanian;
use Illuminate\Http\Request;

class PertanianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pertanian::all()->where('jenis','Pertanian');
        $data1 = Pertanian::all()->where('jenis','Peternakan');
        return view('admin.pertanian.index',compact('data','data1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pertanian.create');
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
            'jenis' => 'required',
            'jumlah' => 'required',
        ]);

        Pertanian::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'jumlah' => $request->jumlah,
            'lahan' => 0,
        ]);

        return redirect()->route('pertanian.index')->with('success','Data berhasil disimpan!');
    }

    public function storeTani(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
            'lahan' => 'required',
        ]);

        Pertanian::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'jumlah' => $request->jumlah,
            'lahan' => $request->lahan,
        ]);

        return redirect()->route('pertanian.index')->with('success','Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pertanian  $pertanian
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanian $pertanian)
    {
        return view('admin.pertanian.show',compact('pertanian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pertanian  $pertanian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertanian $pertanian)
    {
        return view('admin.pertanian.edit',compact('pertanian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pertanian  $pertanian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertanian $pertanian)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
        ]);

        if ($pertanian->jenis=='Pertanian') {
            Pertanian::find($pertanian->id)->update([
                'nama' => $request->nama,
                'jenis' => $request->jenis,
                'jumlah' => $request->jumlah,
                'lahan' => $request->lahan,
            ]);
        } else {
            Pertanian::find($pertanian->id)->update([
                'nama' => $request->nama,
                'jenis' => $request->jenis,
                'jumlah' => $request->jumlah,
            ]);
        }


        return redirect()->route('pertanian.index')->with('success','Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pertanian  $pertanian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertanian $pertanian)
    {
        Pertanian::destroy($pertanian->id);
        return redirect()->route('pertanian.index')->with('success','Data berhasil dihapus!');
    }
}
