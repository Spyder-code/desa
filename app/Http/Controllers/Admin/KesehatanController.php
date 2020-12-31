<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kesehatan;
use Illuminate\Http\Request;

class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kesehatan::all();
        $kesehatan = Kesehatan::find(1);
        return view('admin.kesehatan.index',compact('data','kesehatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kesehatan $kesehatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kesehatan $kesehatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kesehatan $kesehatan)
    {
        $request->validate([
            'sehat' => 'required',
            'sakit' => 'required',
            'hamil' => 'required',
        ]);

        $kesehatan->update([
            'sehat' => $request->sehat,
            'sakit' => $request->sakit,
            'hamil' => $request->hamil,
        ]);

        return back()->with('success','Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kesehatan $kesehatan)
    {
        //
    }
}
