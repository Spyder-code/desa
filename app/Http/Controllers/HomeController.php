<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Bum;
use App\Hukum;
use App\Kunjung;
use App\Pertanian;
use App\Produk;
use App\Rkp;
use App\Rpjm;
use App\User;
use App\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produk = Produk::all()->count();
        $hukum = Hukum::all()->count();
        $pertanian = Pertanian::all()->count();
        $berita = Berita::all()->count();
        $wisata = Wisata::all()->count();
        $kunjung = Kunjung::all()->count();
        $bum = Bum::all()->count();
        $rpjm = Rpjm::all()->count();
        $rkp = Rkp::all()->count();
        return view('admin.dashboard',compact('produk','hukum','pertanian','berita','wisata','kunjung','bum','rpjm','rkp'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'confirmed',
        ]);

        if ($request->password!=null) {
            User::find(1)->update([
                'name' => $request->name,
                'password' => Hash::make($request->password),
            ]);
        }
        User::find(1)->update([
            'name' => $request->name,
        ]);

        return back()->with('success','Profil akun berhasil diubah!');

    }
}
