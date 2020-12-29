<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Hukum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HukumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hukum::all();
        return view('admin.hukum.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hukum.create');
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
            'jenis' => 'required',
            'nomor' => 'required',
            'tentang' => 'required',
            'ditetapkan' => 'required',
            'diundangkan' => 'required',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $data = Hukum::create([
            'jenis' => $request->jenis,
            'nomor' => $request->nomor,
            'tentang' => $request->tentang,
            'ditetapkan' => $request->ditetapkan,
            'diundangkan' => $request->diundangkan,
            'file' => $request->file,
        ]);

        if ($files = $request->file('file')) {
            $profileImage =$data->id.'.pdf';
            $path = $files->storeAs('public/dokumen/hukum', $profileImage);
            $url = Storage::url($path);
            $imgUrl = url($url);
            $data->update([
                'file' =>  $imgUrl,
            ]);
        }

        return redirect()->route('hukum.index')->with('success','Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hukum  $hukum
     * @return \Illuminate\Http\Response
     */
    public function show(Hukum $hukum)
    {
        return view('admin.hukum.show',compact('hukum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hukum  $hukum
     * @return \Illuminate\Http\Response
     */
    public function edit(Hukum $hukum)
    {
        return view('admin.hukum.edit',compact('hukum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hukum  $hukum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hukum $hukum)
    {
        $request->validate([
            'jenis' => 'required',
            'nomor' => 'required',
            'tentang' => 'required',
            'ditetapkan' => 'required',
            'diundangkan' => 'required',
        ]);

        Hukum::find($hukum->id)->update([
            'jenis' => $request->jenis,
            'nomor' => $request->nomor,
            'tentang' => $request->tentang,
            'ditetapkan' => $request->ditetapkan,
            'diundangkan' => $request->diundangkan,
        ]);

        return redirect()->route('hukum.index')->with('success','Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hukum  $hukum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hukum $hukum)
    {
        Hukum::destroy($hukum->id);
        return redirect()->route('hukum.index')->with('success','Data berhasil dihapus!');
    }
}
