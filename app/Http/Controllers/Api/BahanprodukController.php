<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bahanproduk;
use Validator;
use Storage;

class BahanprodukController extends Controller
{
    public function searchbahanproduk(Request $request)
    {
        $filterKeyword = $request->get('keyword');
        $bahanproduk = Bahanproduk::where([
            ['status','LIKE',"%$filterKeyword%"],
            ])->get();
    
        if($bahanproduk){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'bahanproduk' => $bahanproduk
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'bahanproduk' => $bahanproduk
         ]);
     }
}
}
