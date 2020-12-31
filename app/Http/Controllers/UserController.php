<?php

namespace App\Http\Controllers;

use App\Apb;
use App\Berita;
use App\Bum;
use App\Hukum;
use App\Kesehatan;
use App\Kunjung;
use App\Penduduk;
use App\Pertanian;
use App\Produk;
use App\Rkp;
use App\Rpjm;
use App\Wisata;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $wisata = Wisata::all()->take(5);
        $produk = Produk::all()->take(5);
        return view('user.index',compact('wisata','produk'));
    }

    public function kesehatan()
    {
        $data = Kesehatan::find(1);
        return view('user.kesehatan', compact('data'));
    }

    public function berita()
    {
        $data = Berita::all();
        return view('user.berita',compact('data'));
    }

    public function wisata()
    {
        $data = Wisata::all();
        return view('user.wisata',compact('data'));
    }

    public function produk()
    {
        $data = Produk::all();
        return view('user.produk',compact('data'));
    }

    public function hukum()
    {
        $data = Hukum::all();
        return view('user.hukum',compact('data'));
    }

    public function kunjung()
    {
        $data = Kunjung::all();
        return view('user.kunjung',compact('data'));
    }

    public function apb()
    {
        $data = Apb::all();
        return view('user.apb',compact('data'));
    }

    public function rkp()
    {
        $data = Rkp::all();
        return view('user.rkp',compact('data'));
    }

    public function rpjm()
    {
        $data = Rpjm::all();
        return view('user.rpjm',compact('data'));
    }

    public function bum()
    {
        $data = Bum::all();
        return view('user.bum',compact('data'));
    }

    public function penduduk()
    {
        $pekerjaan = Penduduk::all()->where('jenis','pekerjaan');
        $umur = Penduduk::all()->where('jenis','umur');
        $agama = Penduduk::all()->where('jenis','agama');
        $perkawinan = Penduduk::all()->where('jenis','perkawinan');
        $dusun = Penduduk::all()->where('jenis','dusun');
        $pendidikan = Penduduk::all()->where('jenis','pendidikan');
        return view('user.penduduk',compact('pekerjaan','umur','agama','perkawinan','dusun','pendidikan'));
    }

    public function kontak()
    {
        return view('user.kontak');
    }

    public function pertanian()
    {
        $data = Pertanian::all()->where('jenis','Pertanian');
        $data1 = Pertanian::all()->where('jenis','Peternakan');
        return view('user.pertanian',compact('data','data1'));
    }

    public function beritaShow(Berita $berita )
    {
        $data = Berita::all();
        return view('user.beritaShow',compact('berita','data'));
    }

    public function produkShow(Produk $produk )
    {
        $data = Produk::all();
        return view('user.produkShow',compact('produk'));
    }

    public function wisataShow(Wisata $wisata )
    {
        $data = Wisata::all();
        return view('user.wisataShow',compact('wisata'));
    }

}
