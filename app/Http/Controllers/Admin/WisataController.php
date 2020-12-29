<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Wisata::all();
        return view('admin.wisata.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wisata.create');
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
            'deskripsi' => 'required',
            'image' => 'required',
            'harga' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $data = Wisata::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'image' => $request->image,
            'harga' => $request->harga,
        ]);

        if ($files = $request->file('image')) {
            $profileImage =$data->id.'.'.$files->getClientOriginalExtension();
            $path = $files->storeAs('public/images/wisata', $profileImage);
            $url = Storage::url($path);
            $imgUrl = url($url);
            $data->update([
                'image' =>  $imgUrl,
            ]);
        }

        return redirect()->route('wisata.index')->with('success','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $wisatum)
    {
        return view('admin.wisata.show',compact('wisatum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit(Wisata $wisatum)
    {
        return view('admin.wisata.edit',compact('wisatum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wisata $wisatum)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        Wisata::find($wisatum->id)->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect()->route('wisata.index')->with('success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wisata $wisatum)
    {
        Wisata::destroy($wisatum->id);
        return redirect()->route('wisata.index')->with('success','Data berhasil dihapus!');
    }
}
