<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Produkjasa;
use App\Pengajuan;

class HomeController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jumlah_user = User::count();
        $jumlah_produkjasa = Produkjasa::count();
        $jumlah_pengajuan = Pengajuan::count();

        $produkjasa = Produkjasa::all();
        $x = 0;
        foreach($produkjasa as $b)
        {
            $produkjasa[$x]['0'] = $b->nama_toko;
            $produkjasa[$x]['1'] = $b->latitude;
            $produkjasa[$x]['2'] = $b->longitude;
            $x++;
        }
        $result_lat_long = json_encode($produkjasa);
        $location = Produkjasa::first();
        
        return view('home', compact('jumlah_user', 'jumlah_produkjasa', 'jumlah_pengajuan', 'result_lat_long','location'));
    }
}

