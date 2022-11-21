<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProdukjasaResource;
use App\Produkjasa;
use App\Saran;
use App\Harga;
use Validator;
use Storage;

class ProdukjasaController extends Controller
{

    public function tampilprodukjasa()
    {
        $produk = Produkjasa::where([
            ['category', '!=', 'Produk Material'],
        ])->with('user')->get();
 
       if($produk){
        return response()->json([
            'status' => TRUE,
            'msg' => 'Berhasil',
            'produk' => $produk
        ]);
    } else {
        return response()->json([
            'status' => FALSE,
            'msg' => 'Error',
            'produk' => $produk
        ]);
    }
    }

  

    public function myproduct($id)
    {
        $produk = Produkjasa::where([
            ['kd_user', $id],
            ['status', '!=', 'material'],
        ])->orderBy('status', 'DESC')->with(['user'])->get();
 
       if($produk){
        return response()->json([
            'status' => TRUE,
            'msg' => 'Berhasil',
            'produk' => $produk
        ]);
    } else {
        return response()->json([
            'status' => FALSE,
            'msg' => 'Error',
            'produk' => $produk
        ]);
    }
    }

    public function tampilprodukuser()
    {
        $produk = Produkjasa::where([
            ['category', '!=', 'Produk Material'],
            ])->get();

        foreach ($produk as $key => $p) {
            $rating = $this->rating($p->id);
            $produk[$key]['rating'] = $rating;
        }
 
       if($produk){
        return response()->json([
            'status' => TRUE,
            'msg' => 'Berhasil',
            'produk' => $produk
        ]);
    } else {
        return response()->json([
            'status' => FALSE,
            'msg' => 'Error',
            'produk' => $produk
        ]);
    }
    }

    //tampilrating produk user
    public function rating($id)
    {
        $comments = Saran::where('kd_produk', $id)->get();

        $count = $comments->count();
        $sum = $comments->sum('rating');

        $rating = null;
        if ($sum != 0 && $count != 0) {
            $rating = $sum / $count;
        }

        return $rating;
    }


    public function tampilprodukpertoko($id)
    {
        $produk = Produkjasa::where([
            ['kd_user', $id],
            ['status', '!=', 'material'],
        ])->orderBy('status', 'DESC')->with(['user'])->get();
 
       if($produk){
        return response()->json([
            'status' => TRUE,
            'msg' => 'Berhasil',
            'produk' => $produk
        ]);
    } else {
        return response()->json([
            'status' => FALSE,
            'msg' => 'Error',
            'produk' => $produk
        ]);
    }
    }

    public function tampilprodukperjenispembuatan($id, Request $request)
    {
        $produk = Produkjasa::where([
            ['kd_user', $id],
            ['status', '!=', 'material'],
            ['jenis_pembuatan', $request->jenis_pembuatan],
        ])->orderBy('status', 'DESC')->with(['user'])->get();
 
       if($produk){
        return response()->json([
            'status' => TRUE,
            'msg' => 'Berhasil',
            'produk' => $produk
        ]);
    } else {
        return response()->json([
            'status' => FALSE,
            'msg' => 'Error',
            'produk' => $produk
        ]);
    }
    }

    //create produk

    public function store(Request $request)
    {
      $input = $request->all();

      $validator = Validator::make($input,[
        'kd_user'=>'required|max:255',
        'jenis_pembuatan'=>'required|max:255',
        'model'=>'required|max:255',
        'ukuran'=>'required|max:255',
        // 'berat'=>'required|max:255',
        'kecamatan'=>'required|max:255',
        'kelurahan'=>'required|max:255',
        'alamat'=>'required|max:255',
        'phone'=>'required|max:255',
        'harga'=>'required|max:255',
        'latitude'=>'required|max:255',
        'longitude'=>'required|max:255',
        'gambar'=>'required|mimes:jpeg,jpg,png|max:2048',
        'deskripsi'=>'required'
       
      ]);
      
      if($validator->fails()){
        return response()->json([
          "status"=>FALSE,
          "msg"=>$validator->errors()
        ],400);
      }

      if($request->file('gambar')->isValid()){
        $gambar = $request->file('gambar');
        $extention = $gambar->getClientOriginalExtension();
        $namaFoto = "produkjasa/".date('ymdHis').".".$extention;
        $upload_path = 'public/storage/uploads/produkjasa';
        $request->file('gambar')->move($upload_path,$namaFoto);
        $input['gambar'] = $namaFoto;
      }

      $produkjasa = Produkjasa::create(array_merge($input, [
        'status' => 'jasa'
    ]));

      if($produkjasa){
          //memberi respon berhasil
          return response()->json([
            'status'=>TRUE,
            'msg'=>'Data Berhasil Disimpan'
          ],201);
      }
      else
      {
          //Memberi respon gagal
          return response()->json([
            'status'=>FALSE,
            'msg'=>'Data Gagal Disimpan'
          ],200);
        }
    }

    public function show($id)
    {
        $produkjasa = Produkjasa::find($id);
        if(is_null($produkjasa)){
            return response()->json([
                "status"=>FALSE,
                "msg"=>'Record Not Found'
            ],404);
        }

        return new ProdukjasaResource($produkjasa);
    }
    
     public function tambahjasasaja(Request $request)
    {
      $input = $request->all();

      $validator = Validator::make($input,[
        'kd_user'=>'required|max:255',
        'jenis_pembuatan'=>'required|max:255',
        'model'=>'required|max:255',
        'kecamatan'=>'required|max:255',
        'kelurahan'=>'required|max:255',
        'alamat'=>'required|max:255',
        'phone'=>'required|max:255',
        'harga'=>'required|max:255',
        'latitude'=>'required|max:255',
        'longitude'=>'required|max:255',
        'gambar'=>'required|mimes:jpeg,jpg,png|max:2048',
        'deskripsi'=>'required'
       
      ]);
      
      if($validator->fails()){
        return response()->json([
          "status"=>FALSE,
          "msg"=>$validator->errors()
        ],400);
      }

      if($request->file('gambar')->isValid()){
        $gambar = $request->file('gambar');
        $extention = $gambar->getClientOriginalExtension();
        $namaFoto = "produkjasa/".date('ymdHis').".".$extention;
        $upload_path = 'public/storage/uploads/produkjasa';
        $request->file('gambar')->move($upload_path,$namaFoto);
        $input['gambar'] = $namaFoto;
      }

      $produkjasa = Produkjasa::create(array_merge($input, [
        'status' => 'jasa',
        'ukuran' => '',
        // 'berat' => '',
    ]));

      if($produkjasa){
          //memberi respon berhasil
          return response()->json([
            'status'=>TRUE,
            'msg'=>'Data Berhasil Disimpan'
          ],201);
      }
      else
      {
          //Memberi respon gagal
          return response()->json([
            'status'=>FALSE,
            'msg'=>'Data Gagal Disimpan'
          ],200);
        }
    }

    public function produk_detail($id)
    {
        $produk = Produkjasa::where('id', $id)->with('user')->first();
        if($produk){
            return response()->json([
                'status' => TRUE,
                'msg' => 'Berhasil',
                'produk' => $produk
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'msg' => 'Error',
            ]);
        }
    }

    public function produkjasa_detail($id)
    {
        $produk = Produkjasa::where([
            ['id', $id],
            ['status', '!=', 'pelanggan'],
        ])->with('user')->first();
        if($produk){
            return response()->json([
                'status' => TRUE,
                'msg' => 'Berhasil',
                'produk' => $produk
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'msg' => 'Error',
            ]);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $produkjasa = Produkjasa::find($id);
        if(is_null($produkjasa))
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
            ],404);
        }

        $validator = Validator::make($input,[
            'category'=>'required|max:255',
            'jenis_pembuatan'=>'required|max:255',
            'model'=>'required|max:255',
            'ukuran'=>'required|max:255',
            // 'berat'=>'required|max:255',
            'kecamatan'=>'required|max:255',
            'kelurahan'=>'required|max:255',
            'alamat'=>'required|max:255',
            'phone'=>'required|max:255',
            'harga'=>'required|max:255',
            'latitude'=>'required|max:255',
            'longitude'=>'required|max:255',
            'gambar'=>'sometimes|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi'=>'required'
        ]);

        if($validator->fails()){
            return response()->json([
                "status"=>FALSE,
                "msg"=>$validator->errors()
            ],400);
        }

        if($request->hasFile('gambar')){
            if($request->file('gambar')->isValid())
            {
               
                Storage::disk('local')->delete($produkjasa->gambar);

                $gambar = $request->file('gambar');
                $extention = $gambar->getClientOriginalExtension();
                $namaFoto = "produkjasa/".date('YmdHis').".".$extention;
                $upload_path = 'public/storage/uploads/produkjasa';
                $request->file('gambar')->move($upload_path,$namaFoto);
                $input['gambar'] = $namaFoto;

            }   
        }

        $produkjasa->update($input);
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Data Berhasil diupdate'
        ],200);

    }
    
     public function updatejasasaja(Request $request, $id)
    {
        $input = $request->all();
        $produkjasa = Produkjasa::find($id);
        if(is_null($produkjasa))
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
            ],404);
        }

        $validator = Validator::make($input,[
            'category'=>'required|max:255',
            'jenis_pembuatan'=>'required|max:255',
            'model'=>'required|max:255',
            'kecamatan'=>'required|max:255',
            'kelurahan'=>'required|max:255',
            'alamat'=>'required|max:255',
            'phone'=>'required|max:255',
            'harga'=>'required|max:255',
            'latitude'=>'required|max:255',
            'longitude'=>'required|max:255',
            'gambar'=>'sometimes|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi'=>'required'
        ]);

        if($validator->fails()){
            return response()->json([
                "status"=>FALSE,
                "msg"=>$validator->errors()
            ],400);
        }

        if($request->hasFile('gambar')){
            if($request->file('gambar')->isValid())
            {
               
                Storage::disk('local')->delete($produkjasa->gambar);

                $gambar = $request->file('gambar');
                $extention = $gambar->getClientOriginalExtension();
                $namaFoto = "produkjasa/".date('YmdHis').".".$extention;
                $upload_path = 'public/storage/uploads/produkjasa';
                $request->file('gambar')->move($upload_path,$namaFoto);
                $input['gambar'] = $namaFoto;
            }   
        }

        $produkjasa->update($input);
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Data Berhasil diupdate'
        ],200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produkjasa = Produkjasa::find($id);
        if(is_null($produkjasa))
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
            ],404);
        }

        $produkjasa->delete();
        Storage::disk('local')->delete($produkjasa->gambar);
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Data Berhasil dihapus',
        ],200);
    }

    public function search(Request $request)
    {
        $filterKeyword = $request->get('keyword');
        $produk = Produkjasa::where([
            ['status', '!=', 'material'],
            ['jenis_pembuatan','LIKE',"%$filterKeyword%"],
            ])->get();
    
        if($produk){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'produk' => $produk
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'produk' => $produk
         ]);
     }
    }

    public function spinnercategoriproduk(Request $request)
    {
        $filterKeyword = $request->get('keyword');
        $produk = Produkjasa::where([
            ['status', '!=', 'material'],
            ['jenis_pembuatan','LIKE',"%$filterKeyword%"],
            ])->get();
    
        if($produk){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'produk' => $produk
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'produk' => $produk
         ]);
     }
    }

   
    public function searchjenispembuatan(Request $request)
    {
        $filterKeyword = $request->get('keyword');
        $produk = Produkjasa::where([
            ['status', '!=', 'material'],
            ['category','LIKE',"%$filterKeyword%"],
            ])->get();
    
        if($produk){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'produk' => $produk
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'produk' => $produk
         ]);
     }
}

public function searchkecamatan(Request $request)
    {
        $filterKeyword = $request->get('keyword');
        $produk = Produkjasa::where([
            ['status', '!=', 'material'],
            ['alamat','LIKE',"%$filterKeyword%"],
            ])->get();
    
        if($produk){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'produk' => $produk
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'produk' => $produk
         ]);
     }
    }

    public function commentRating($id)
    {
      $comments = Saran::where('kd_produk', $id)->get();
  
      $count = $comments->count();
      $sum = $comments->sum('rating');
  
      $rating = null;
      if ($sum != 0 && $count != 0) {
        $rating = $sum / $count;
      }
  
      if (!is_null($rating)) {
        return response()->json([
          'status' => TRUE,
          'message' => 'Berhasil mendapatkan rating',
          'rating' => $rating
        ]);
      } else {
        return response()->json([
          'status' => FALSE,
          'message' => 'Gagal mendapatkan rating!',
          'rating' => $rating
        ]);
      }
    }
    
     public function searchukuranjasasaja(Request $request)

    {
        $filterKeyword = $request->get('keyword');
        $harga = Harga::where([
            ['status', '!=', 'Produk Jasa dan Material'],
            ['ukuran','LIKE',"%$filterKeyword%"],
            ])->get();
    
        if($harga){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'harga' => $harga
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'harga' => $harga
         ]);
     }
}

public function searchukuranjasadanmaterialkanopi(Request $request)

    {
        $filterKeyword = $request->get('keyword');
        $harga = Harga::where([
            ['status', '!=', 'Produk Jasa'],
             ['jenis_pembuatan', '!=', 'Pembuatan Pagar'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tangga'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tralis'],
            ['jenis_pembuatan', '!=', 'Pembuatan Halaman'],
            ['ukuran','LIKE',"%$filterKeyword%"],

            ])->get();
    
        if($harga){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'harga' => $harga
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'harga' => $harga
         ]);
     }
}

public function searchukuranjasadanmaterialpagar(Request $request)

    {
        $filterKeyword = $request->get('keyword');
        $harga = Harga::where([
            ['status', '!=', 'Produk Jasa'],
             ['jenis_pembuatan', '!=', 'Pembuatan Kanopi'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tangga'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tralis'],
            ['jenis_pembuatan', '!=', 'Pembuatan Halaman'],
            ['ukuran','LIKE',"%$filterKeyword%"],

            ])->get();
    
        if($harga){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'harga' => $harga
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'harga' => $harga
         ]);
     }
}

public function searchukuranjasadanmaterialtangga(Request $request)

    {
        $filterKeyword = $request->get('keyword');
        $harga = Harga::where([
            ['status', '!=', 'Produk Jasa'],
             ['jenis_pembuatan', '!=', 'Pembuatan Kanopi'],
            ['jenis_pembuatan', '!=', 'Pembuatan Pagar'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tralis'],
            ['jenis_pembuatan', '!=', 'Pembuatan Halaman'],
            ['ukuran','LIKE',"%$filterKeyword%"],

            ])->get();
    
        if($harga){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'harga' => $harga
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'harga' => $harga
         ]);
     }
}

public function searchukuranjasadanmaterialtralis(Request $request)

    {
        $filterKeyword = $request->get('keyword');
        $harga = Harga::where([
            ['status', '!=', 'Produk Jasa'],
             ['jenis_pembuatan', '!=', 'Pembuatan Kanopi'],
            ['jenis_pembuatan', '!=', 'Pembuatan Pagar'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tangga'],
            ['jenis_pembuatan', '!=', 'Pembuatan Halaman'],
            ['ukuran','LIKE',"%$filterKeyword%"],

            ])->get();
    
        if($harga){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'harga' => $harga
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'harga' => $harga
         ]);
     }
}

public function searchukuranjasadanmaterialhalaman(Request $request)

    {
        $filterKeyword = $request->get('keyword');
        $harga = Harga::where([
            ['status', '!=', 'Produk Jasa'],
             ['jenis_pembuatan', '!=', 'Pembuatan Kanopi'],
            ['jenis_pembuatan', '!=', 'Pembuatan Pagar'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tangga'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tralis'],
            ['ukuran','LIKE',"%$filterKeyword%"],

            ])->get();
    
        if($harga){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'harga' => $harga
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'harga' => $harga
         ]);
     }
}

public function searchhargaprodukjasasaja(Request $request)
    {
        $filterKeyword = $request->get('keyword');
        $harga = Harga::where([
            ['status', '!=', 'Produk Jasa dan Material'],
            ['jenis_pembuatan','LIKE',"%$filterKeyword%"],
            ])->get();
    
        if($harga){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'harga' => $harga
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'harga' => $harga
         ]);
     }
}

public function searchhargaprodukjasadanmaterial(Request $request)
{
    $filterKeyword = $request->get('keyword');
    $harga = Harga::where([
        ['status', '!=', 'Produk Jasa'],
        ['jenis_pembuatan','LIKE',"%$filterKeyword%"],
        ])->get();

    if($harga){
     return response()->json([
         'status' => TRUE,
         'msg' => 'Berhasil',
         'harga' => $harga
     ]);
 } else {
     return response()->json([
         'status' => FALSE,
         'msg' => 'Error',
         'harga' => $harga
     ]);
 }
}

public function searchhargaprodukjasadanmaterialpagar(Request $request)

    {
        $filterKeyword = $request->get('keyword');
        $harga = Harga::where([
            ['status', '!=', 'Produk Jasa'],
             ['jenis_pembuatan', '!=', 'Pembuatan Kanopi'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tangga'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tralis'],
            ['jenis_pembuatan', '!=', 'Pembuatan Halaman'],
            ['jenis_pembuatan','LIKE',"%$filterKeyword%"],

            ])->get();
    
        if($harga){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'harga' => $harga
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'harga' => $harga
         ]);
     }
}

public function searchhargaprodukjasadanmaterialtangga(Request $request)

    {
        $filterKeyword = $request->get('keyword');
        $harga = Harga::where([
            ['status', '!=', 'Produk Jasa'],
             ['jenis_pembuatan', '!=', 'Pembuatan Kanopi'],
            ['jenis_pembuatan', '!=', 'Pembuatan Pagar'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tralis'],
            ['jenis_pembuatan', '!=', 'Pembuatan Halaman'],
            ['jenis_pembuatan','LIKE',"%$filterKeyword%"],

            ])->get();
    
        if($harga){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'harga' => $harga
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'harga' => $harga
         ]);
     }
}

public function searchhargaprodukjasadanmaterialtralis(Request $request)

    {
        $filterKeyword = $request->get('keyword');
        $harga = Harga::where([
            ['status', '!=', 'Produk Jasa'],
             ['jenis_pembuatan', '!=', 'Pembuatan Kanopi'],
            ['jenis_pembuatan', '!=', 'Pembuatan Pagar'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tangga'],
            ['jenis_pembuatan', '!=', 'Pembuatan Halaman'],
            ['jenis_pembuatan','LIKE',"%$filterKeyword%"],

            ])->get();
    
        if($harga){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'harga' => $harga
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'harga' => $harga
         ]);
     }
}

public function searchhargaprodukjasadanmaterialhalaman(Request $request)

    {
        $filterKeyword = $request->get('keyword');
        $harga = Harga::where([
            ['status', '!=', 'Produk Jasa'],
             ['jenis_pembuatan', '!=', 'Pembuatan Kanopi'],
            ['jenis_pembuatan', '!=', 'Pembuatan Pagar'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tangga'],
            ['jenis_pembuatan', '!=', 'Pembuatan Tralis'],
            ['jenis_pembuatan','LIKE',"%$filterKeyword%"],

            ])->get();
    
        if($harga){
         return response()->json([
             'status' => TRUE,
             'msg' => 'Berhasil',
             'harga' => $harga
         ]);
     } else {
         return response()->json([
             'status' => FALSE,
             'msg' => 'Error',
             'harga' => $harga
         ]);
     }
}

}
