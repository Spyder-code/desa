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
        return view('admin.pembangunan.rpjm.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rpjm  $rpjm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rpjm $rpjm)
    {
        //
    }
}
