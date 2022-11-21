<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Alamat;
use Validator;
use Storage;


class AlamatController extends Controller
{
    public function searchalamatkecamatan(Request $request)
    {
        $filterKeyword = $request->get('keyword');
        $alamat = Alamat::where([
            ['status','LIKE',"%$filterKeyword%"],
            ])->get();
    
        if($alamat){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'alamat' => $alamat
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'alamat' => $alamat
         ]);
     }
}
}
