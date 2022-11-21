<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PengajuanResource;
use App\Pengajuan;
use Validator;
use Storage;

class PengajuanController extends Controller
{
    public function index()
    {
        return PengajuanResource::collection(Pengajuan::all());
    }


    // PENGAJUAN JASA
    public function mypengajuan(Request $request)
    {
       $pengajuan = Pengajuan::where([
           ['kd_jasa', $request->kd_jasa],
           ['status', 'Menunggu']
       ])->get();
       return PengajuanResource::collection($pengajuan);
    }

     //Tampil Pengajuan Bagian Jasa

     //tampil jasa menunggu
    public function pengajuanJasaMenunggu($id)
    {
       $pengajuan = Pengajuan::orderBy('id', 'DESC')->whereHas('produk', function ($query) use ($id) {
            $query->where([
                ['kd_user', $id],
                ['category', '!=', 'Produk Material']]);
       })->where('status', 'Menunggu')->with(['produk', 'user'])->get();

       if ($pengajuan) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Pengajuan menunggu',
            'pengajuan' => $pengajuan
        ],201);   
       }
    }

    //  //tampil jasa dikonfirmasi
     public function pengajuanJasaDikonfirmasi($id)
     {
        $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->whereHas('produk', function ($query) use ($id) {
            $query->where([
                ['kd_user', $id],
                ['category', '!=', 'Produk Material']]);
       })->where('status', 'Dikonfirmasi')->with(['produk', 'user'])->get();

       if ($pengajuan) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Pengajuan konfirmasi',
            'pengajuan' => $pengajuan
        ],201);   
       }
     }
     

     //  //tampil jasa sudahbertemu
     public function pengajuanJasaBertemu($id)
     {
        $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->whereHas('produk', function ($query) use ($id) {
            $query->where([
                ['kd_user', $id],
                ['category', '!=', 'Produk Material']]);})->where([
                    ['status', '!=', 'Menunggu'],
                    ['status', '!=', 'DP'],
                    ['status', '!=', 'Diterima'],
                    ['status', '!=', 'Dikonfirmasi'],
                    ['status', '!=', 'Dikerjakan'],
                    ['status', '!=', 'Dikerjakan*'],
                    ['status', '!=', 'Pelunasan'],
                    ['status', '!=', 'Sudah Lunas'],
                    ['status', '!=', 'Sudah Lunas*'],
                    ['status', '!=', 'Pelunasan'],
                    ['status', '!=', 'Selesai'],
                    ['status', '!=', 'History']
                    ])->with(['produk', 'user'])->get();
    
                if ($pengajuan) {
                    return response()->json([
                        'status'=>TRUE,
                        'msg'=>'Bertemu',
                        'pengajuan' => $pengajuan
                    ],201);   
                }
        }
     

    //tampil jasa diterima
    public function pengajuanJasaDiterima($id)
    {
        $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->whereHas('produk', function ($query) use ($id) {
            $query->where([
                ['kd_user', $id],
                ['category', '!=', 'Produk Material']]);
       })->where('status', 'Diterima')->with(['produk', 'user'])->get();

       if ($pengajuan) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Pengajuan diterima',
            'pengajuan' => $pengajuan
        ],201);   
       }
    }

    //tampil jasa DP
    public function pengajuanJasaDP($id)
    {
        $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->whereHas('produk', function ($query) use ($id) {
            $query->where([
                ['kd_user', $id],
                ['category', '!=', 'Produk Material']]);
            })->where([
                ['status', '!=', 'Menunggu'],
                ['status', '!=', 'Diterima'],
                ['status', '!=', 'Bertemu'],
                ['status', '!=', 'Dikonfirmasi'],
                ['status', '!=', 'Ditolak'],
                ['status', '!=', 'Dikerjakan'],
                ['status', '!=', 'Dikerjakan*'],
                ['status', '!=', 'Pelunasan'],
                ['status', '!=', 'Selesai'],
                ['status', '!=', 'History']
                ])->with(['produk', 'user'])->get();

            if ($pengajuan) {
                return response()->json([
                    'status'=>TRUE,
                    'msg'=>'DP',
                    'pengajuan' => $pengajuan
                ],201);   
            }
    }

    //tampil jasa proses // dikerjakan
    public function pengajuanJasaTampilDiproses($id)
    {
        $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->whereHas('produk', function ($query) use ($id) {
            $query->where([
                ['kd_user', $id],
                ['category', '!=', 'Produk Material']]);
            })->where([
                ['status', '!=', 'Menunggu'],
                ['status', '!=', 'Diterima'],
                ['status', '!=', 'Bertemu'],
                ['status', '!=', 'DP'],
                ['status', '!=', 'Dikonfirmasi'],
                ['status', '!=', 'Ditolak'],
                ['status', '!=', 'Pelunasan'],
                ['status', '!=', 'Sudah Lunas'],
                ['status', '!=', 'Sudah Lunas*'],
                ['status', '!=', 'Selesai'],
                ['status', '!=', 'History']
                ])->with(['produk', 'user'])->get();        

       if ($pengajuan) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Dikerjakan',
            'pengajuan' => $pengajuan
        ],201);   
       }
    }

    //tampil jasa pelunasan
    public function pengajuanJasaTampilPelunasan($id)
    {
        $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->whereHas('produk', function ($query) use ($id) {
            $query->where([
                ['kd_user', $id],
                ['category', '!=', 'Produk Material']]);
       })->where('status', 'Pelunasan')->with(['produk', 'user'])->get();


       if ($pengajuan) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Pelunasan',
            'pengajuan' => $pengajuan
        ],201);   
       }
    }

    //tampil jasa selesai
    public function pengajuanJasaTampilSelesai($id)
    {
       $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->orderBy('id', 'DESC')->whereHas('produk', function ($query) use ($id) {
        $query->where([
            ['kd_user', $id],
            ['category', '!=', 'Produk Material']]);
       })->where('status', 'Selesai')->with(['produk', 'user'])->get();

       if ($pengajuan) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Selesai',
            'pengajuan' => $pengajuan
        ],201);   
       }
    }

    // Proses Menunggu Jasa
    // Menunggu ke Dikonfirmasi
    public function cektempatpembuatan(Request $request, $id)
    {
        $pengajuan = Pengajuan::where('id', $id)->update([
            'status' => 'Dikonfirmasi'
        ]);

        $data = Pengajuan::where('id', $id)->with('user')->first();
        $this->pushNotif('pengajuan', 'Pengajuan jasa yang anda kirim telah dikonfirmasi', $data->user->fcm);
  

        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Berhasil Dikonfirmasi', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal Dikonfirmasi', 
            ],200);
        }
    }

    //PROSES
    //Dari Konfirmasi ke Sudah bertemu
    public function pengajuanUserSudahbertemu($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->update([
            'status' => 'Bertemu'
        ]);

        // $data = Pengajuan::where('id', $id)->with('user')->first();
        // $this->pushNotif('pengajuan', 'Pengajuan jasa sedang dikerjakan', $data->user->fcm);
  

        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Berhasil Konfirmasi', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal Konfirmasi', 
            ],200);
        }
    }


    // Proses Menunggu Jasa
    // Menunggu ke Diterima
    public function hargaPengajuan(Request $request, $id)
    {
        $pengajuan = Pengajuan::with(['produk', 'user'])->where('id', $id)->update([
            'harga' => $request->harga,
            'deskripsi_kesepakatan' => $request->deskripsi_kesepakatan,
            'panjang' => $request->panjang,
            'lebar' => $request->lebar,
            'status_dp' => $request->status_dp,
            'status' => 'Diterima'
        ]);

        $data = Pengajuan::where('id', $id)->with('user')->first();
        $this->pushNotif('pengajuan', 'Pengajuan produk jasa telah diterima, silakan lakukan DP untuk melanjutkan', $data->user->fcm);
  
        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Berhasil mengirim harga', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal mengirim harga', 
            ],200);
        }
    }

    //tolak kesepakatan
    public function tolakkesepakatan(Request $request, $id)
    {
       
        $pengajuan = Pengajuan::where('id', $id)->update([
            'pesan' => $request->pesan,
            'status' => 'Ditolak'
        ]);

        $data = Pengajuan::where('id', $id)->with('produk.user')->first();
        $this->pushNotif('pengajuan', 'Kesepakatan yang anda berikan telah ditolak oleh pembeli, silakan cek kembali', $data->produk->user->fcm);
  

        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Berhasil ditolak', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal ditolak', 
            ],200);
        }
    }

    //PROSES Jasa
    //Dari DP ke Diproses
    public function pengajuanJasaDiproses($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->update([
            'status' => 'Dikerjakan'
        ]);

        $data = Pengajuan::where('id', $id)->with('user')->first();
        $this->pushNotif('pengajuan', 'Pengajuan jasa sedang dikerjakan', $data->user->fcm);
  

        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Berhasil Dikerjakan', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal Dikerjakan', 
            ],200);
        }
    }

    //PROSES Jasa
    //Dari DP ke Diproses
    public function pengajuanJasaDiprosesbayarcash($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->update([
            'status' => 'Dikerjakan*'
        ]);

        $data = Pengajuan::where('id', $id)->with('user')->first();
        $this->pushNotif('pengajuan', 'Pengajuan jasa sedang dikerjakan', $data->user->fcm);
  

        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Berhasil Dikerjakan', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal Dikerjakan', 
            ],200);
        }
    }

    //PROSES Jasa
    //Dari Proses ke Pelunasan
    public function pengajuanJasaProsesPelunasan($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->update([
            'status' => 'Pelunasan'
        ]);

        $data = Pengajuan::where('id', $id)->with('user')->first();
        $this->pushNotif('pengajuan', 'Pekerjaan jasa telah selesai, Silakan lakukan pelunasan', $data->user->fcm);
  

        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Selesai', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal', 
            ],200);
        }
    }

     //PROSES Jasa
    //Dari Proses ke Pelunasan
    public function pengajuanJasaProsesPelunasanbayarcash($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->update([
            'status' => 'Sudah Lunas*'
        ]);

        $data = Pengajuan::where('id', $id)->with('user')->first();
        $this->pushNotif('pengajuan', 'Pekerjaan jasa telah selesai, Silakan memberi review', $data->user->fcm);
  

        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Selesai', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal', 
            ],200);
        }
    }

    //PROSES
    //Dari DIkerjakan ke Pelunasan
    public function pengajuanJasaPelunasanSelesai($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->update([
            'status' => 'Pelunasan'
        ]);
        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Selesai', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal', 
            ],200);
        
    }
}

    
//MELAKUKAN PENGAJUAN JASA SAJA
    public function store(Request $request)
    {
      $input = $request->all();

      $validator = Validator::make($input,[
        'deskripsi'=>'required|max:255',
        'gambar'=>'required|image|mimes:jpeg,jpg,png|max:2048',
        'categori_pesanan'=>'required|max:255',
        'alamat'=>'required|max:255',
        'phone'=>'required|max:20',
        'latitude'=>'required|max:255',
        'longitude'=>'required|max:255',
        'category'=>'required|max:100',

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
        $namaFoto = "pengajuan/".date('ymdHis').".".$extention;
        $upload_path = 'public/storage/uploads/pengajuan';
        $request->file('gambar')->move($upload_path,$namaFoto);
        $input['gambar'] = $namaFoto;
      }

      $pengajuan = Pengajuan::create(array_merge($input, [
          'harga' => '0',
          'bukti' => '',
          'deskripsi_kesepakatan' => '',
          'pesan' => '',
          'panjang' => '',
          'lebar' => '',
          'status_dp' => ''
      ]));

      $data = Pengajuan::where('id', $pengajuan->id)->with('produk.user')->first();
      $this->pushNotif('pengajuan', 'Seseorang telah melakukan pengajuan jasa', $data->produk->user->fcm);



      if($pengajuan){
          //memberi respon berhasil
          return response()->json([
            'status'=>TRUE,
            'msg'=>'Terimakasih, Pengajuan Terkirim'
          ],201);
      }
      else
      {
          //Memberi respon gagal
          return response()->json([
            'status'=>FALSE,
            'msg'=>'gagal Mengirim'
          ],200);
        }
    }

    // MELAKUKAN PENGAJUAN JASA dan MATERIAL
    public function Pengajuanjasadanmaterial(Request $request)
    {
      $input = $request->all();

      $validator = Validator::make($input,[
        'deskripsi'=>'required|max:255',
        'gambar'=>'required|image|mimes:jpeg,jpg,png|max:2048',
        'categori_pesanan'=>'required|max:255',
        'alamat'=>'required|max:255',
        'phone'=>'required|max:13',
        'latitude'=>'required|max:255',
        'longitude'=>'required|max:255',
        'category'=>'required|max:100',

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
        $namaFoto = "pengajuan/".date('ymdHis').".".$extention;
        $upload_path = 'public/storage/uploads/pengajuan';
        $request->file('gambar')->move($upload_path,$namaFoto);
        $input['gambar'] = $namaFoto;
      }

      $pengajuan = Pengajuan::create(array_merge($input, [
          'harga' => '0',
          'bukti' => '',
          'deskripsi_kesepakatan' => '',
          'panjang' => '',
          'lebar' => '',
          'pesan' => '',
          'status_dp' => ''
      ]));

      $data = Pengajuan::where('id', $pengajuan->id)->with('produk.user')->first();
      $this->pushNotif('pengajuan', 'Seseorang telah melakukan pengajuan jasa dan material', $data->produk->user->fcm);



      if($pengajuan){
          //memberi respon berhasil
          return response()->json([
            'status'=>TRUE,
            'msg'=>'Terimakasih, Pengajuan Terkirim'
          ],201);
      }
      else
      {
          //Memberi respon gagal
          return response()->json([
            'status'=>FALSE,
            'msg'=>'gagal Mengirim'
          ],200);
        }
    }

   

    public function show($id)
    {
        $pengajuan = Pengajuan::find($id);
        if(is_null($pengajuan)){
            return response()->json([
                "status"=>FALSE,
                "msg"=>'Record Not Found'
            ],404);
        }

        return new PengajuanResource($pengajuan);
    }


    public function update(Request $request, $id)
    {
        $input = $request->all();
        $pengajuan = Pengajuan::find($id);
        if(is_null($pengajuan))
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
            ],404);
        }

        $validator = Validator::make($input,[
            'deskripsi'=>'required|max:255'
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
               
                Storage::disk('local')->delete($pengajuan->gambar);

                $gambar = $request->file('gambar');
                $extention = $gambar->getClientOriginalExtension();
                $namaFoto = "pengajuan/".date('YmdHis').".".$extention;
                $upload_path = 'public//storage/uploads/pengajuan';
                $request->file('gambar')->move($upload_path,$namaFoto);
                $input['gambar'] = $namaFoto;
            }   
        }
        $pengajuan->update($input);
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Data Berhasil diupdate'
        ],200);
    }

    public function destroy($id)
    {
        $pengajuan = Pengajuan::find($id);
        if(is_null($pengajuan))
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
            ],404);
        }

        $pengajuan->delete();
        Storage::disk('local')->delete($pengajuan->gambar);
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Data Berhasil dihapus',
        ],200);
    }


    public function detailPengajuan($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->with('produk','user')->first();
        if ($pengajuan){
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Detail Pengajuan', 
                'pengajuan'=>$pengajuan
            ],200);

        } else {

            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal Menampilkan', 
                'pengajuan'=>$pengajuan
            ],200);
        }
    }

    //Tampil Menunggu
    public function pengajuanUserMenunggu($id)
    {
       $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->where([
           ['kd_user', $id],
           ['category', 'produkjasa'],
           ['status', '!=', 'Dikonfirmasi'],
           ['status', '!=', 'Bertemu'],
           ['status', '!=', 'Diterima'],
           ['status', '!=', 'Ditolak'],
           ['status', '!=', 'DP'],
           ['status', '!=', 'Sudah Lunas'],
           ['status', '!=', 'Sudah Lunas*'],
           ['status', '!=', 'Dikerjakan'],
           ['status', '!=', 'Dikerjakan*'],
           ['status', '!=', 'Pelunasan'],
           ['status', '!=', 'Selesai'],
           ['status', '!=', 'History']
       ])->orderBy('status', 'DESC')->with(['produk', 'user'])->get();

       if ($pengajuan) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Pengajuan menunggu',
            'pengajuan' => $pengajuan
        ],201);   
       }
    }

    //Tampil Dikonfirmasi
    public function pengajuanUserDikonfirmasi($id)
    {
       $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->where([
           ['kd_user', $id],
           ['category', 'produkjasa'],
           ['status', '!=', 'Menunggu'],
           ['status', '!=', 'Diterima'],
           ['status', '!=', 'Bertemu'],
           ['status', '!=', 'DP'],
           ['status', '!=', 'Sudah Lunas'],
           ['status', '!=', 'Sudah Lunas*'],
           ['status', '!=', 'Dikerjakan'],
           ['status', '!=', 'Dikerjakan*'],
           ['status', '!=', 'Pelunasan'],
           ['status', '!=', 'Selesai'],
           ['status', '!=', 'History']
       ])->orderBy('status', 'DESC')->with(['produk', 'user'])->get();

       if ($pengajuan) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Pengajuan menunggu',
            'pengajuan' => $pengajuan
        ],201);   
       }
    }

 //Tampil Bertemu
    public function pengajuanUserBertemu($id)
    {
       $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->where([
           ['kd_user', $id],
           ['category', 'produkjasa'],
           ['status', '!=', 'Menunggu'],
           ['status', '!=', 'Diterima'],
           ['status', '!=', 'Dikonfirmasi'],
           ['status', '!=', 'DP'],
           ['status', '!=', 'Sudah Lunas'],
           ['status', '!=', 'Sudah Lunas*'],
           ['status', '!=', 'Dikerjakan'],
           ['status', '!=', 'Dikerjakan*'],
           ['status', '!=', 'Pelunasan'],
           ['status', '!=', 'Selesai'],
           ['status', '!=', 'History']
       ])->orderBy('status', 'DESC')->with(['produk', 'user'])->get();

       if ($pengajuan) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Pengajuan menunggu',
            'pengajuan' => $pengajuan
        ],201);   
       }
    }

    //Tampil Diterima
    public function pengajuanUserDiterima($id)
    {
       $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->where([
           ['kd_user', $id],
           ['category', 'produkjasa'],
           ['status', '!=', 'Menunggu'],
           ['status', '!=', 'Dikonfirmasi'],
           ['status', '!=', 'Bertemu'],
           ['status', '!=', 'Ditolak'],
           ['status', '!=', 'DP'],
           ['status', '!=', 'Sudah Lunas'],
           ['status', '!=', 'Sudah Lunas*'],
           ['status', '!=', 'Dikerjakan'],
           ['status', '!=', 'Dikerjakan*'],
           ['status', '!=', 'Pelunasan'],
           ['status', '!=', 'Selesai'],
           ['status', '!=', 'History']
       ])->orderBy('status', 'DESC')->with(['produk', 'user'])->get();
       
       if ($pengajuan) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Pengajuan diterima',
            'pengajuan' => $pengajuan
        ],201);   
       }
    }

    //Tampil DP user
    public function pengajuanUserDP($id)
    {
       $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->where([
           ['kd_user', $id],
           ['category', 'produkjasa'],
           ['status', '!=', 'Menunggu'],
           ['status', '!=', 'Diterima'],
           ['status', '!=', 'Ditolak'],
           ['status', '!=', 'Dikonfirmasi'],
           ['status', '!=', 'Bertemu'],
           ['status', '!=', 'Dikerjakan'],
            ['status', '!=', 'Dikerjakan*'],
           ['status', '!=', 'Sudah Lunas*'],
           ['status', '!=', 'Pelunasan'],
           ['status', '!=', 'Selesai'],
           ['status', '!=', 'History']
       ])->orderBy('status', 'DESC')->with(['produk', 'user'])->get();

       if ($pengajuan) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Berhasil Tampil DP',
            'pengajuan' => $pengajuan
        ],201);   
       }
    }

    // tampil dikerjakan
    public function pengajuanUserDiproses($id)
    {
       $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->where([
           ['kd_user', $id],
           ['category', 'produkjasa'],
           ['status', '!=', 'Menunggu'],
           ['status', '!=', 'Diterima'],
           ['status', '!=', 'Ditolak'],
           ['status', '!=', 'Dikonfirmasi'],
           ['status', '!=', 'Bertemu'],
           ['status', '!=', 'Sudah Lunas'],
           ['status', '!=', 'Sudah Lunas*'],
           ['status', '!=', 'DP'],
           ['status', '!=', 'Pelunasan'],
           ['status', '!=', 'Selesai'],
           ['status', '!=', 'History']
       ])->orderBy('status', 'DESC')->with(['produk', 'user'])->get();

       if ($pengajuan) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'DP dan Proses Berhasil',
            'pengajuan' => $pengajuan
        ],201);   
       }
    }

    //Tampil Pelunasan
    public function pengajuanUserPelunasan($id)
    {
        $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->where([
            ['kd_user', $id],
            ['category', 'produkjasa'],
            ['status', '!=', 'Menunggu'],
            ['status', '!=', 'Dikonfirmasi'],
            ['status', '!=', 'Bertemu'],
            ['status', '!=', 'Diterima'],
            ['status', '!=', 'Ditolak'],
            ['status', '!=', 'Sudah Lunas'],
            ['status', '!=', 'Dikerjakan*'],
            ['status', '!=', 'DP'],
            ['status', '!=', 'Dikerjakan'],
            ['status', '!=', 'Selesai'],
            ['status', '!=', 'History']
        ])->orderBy('status', 'DESC')->with(['produk', 'user'])->get();
 
        if ($pengajuan) {
         return response()->json([
             'status'=>TRUE,
             'msg'=>'Pengajuan menunggu dan diterima',
             'pengajuan' => $pengajuan
         ],201);   
        }
     }

    //Tampil Selesai
    public function pengajuanUserSelesai($id)
    {
        $pengajuan = Pengajuan::orderBy('updated_at', 'DESC')->where([
            ['kd_user', $id],
            ['category', 'produkjasa'],
            ['status', '!=', 'Menunggu'],
            ['status', '!=', 'Dikonfirmasi'],
            ['status', '!=', 'Bertemu'],
            ['status', '!=', 'Diterima'],
            ['status', '!=', 'Ditolak'],
            ['status', '!=', 'DP'],
            ['status', '!=', 'Sudah Lunas'],
            ['status', '!=', 'Sudah Lunas*'],
            ['status', '!=', 'Dikerjakan'],
            ['status', '!=', 'Dikerjakan*'],
            ['status', '!=', 'Pelunasan'],
            ['status', '!=', 'History']
        ])->orderBy('status', 'DESC')->with(['produk', 'user'])->get();
 
        if ($pengajuan) {
         return response()->json([
             'status'=>TRUE,
             'msg'=>'Pengajuan menunggu dan diterima',
             'pengajuan' => $pengajuan
         ],201);   
        }
     }

      // Proses bagian user
    // Diterima Ke DP
    public function buktiPengajuan(Request $request, $id)
    {
        if($request->file('bukti')->isValid()){
            $gambar = $request->file('bukti');
            $extention = $gambar->getClientOriginalExtension();
            $namaFoto = "pengajuan/".date('ymdHis').".".$extention;
            $upload_path = 'public/storage/uploads/pengajuan';
            $request->file('bukti')->move($upload_path,$namaFoto);
          }

        $pengajuan = Pengajuan::where('id', $id)->update([
            'bukti' => $namaFoto,
            'status' => 'DP'
        ]);

        $data = Pengajuan::where('id', $id)->with('produk.user')->first();
        $this->pushNotif('pengajuan', 'Seseorang telah melakukan DP untuk pengajuan jasa', $data->produk->user->fcm);
  

        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Berhasil mengirim bukti', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal mengirim bukti', 
            ],200);
        }
    }

     // Diterima Ke DP
     public function buktiCast(Request $request, $id)
     {
         if($request->file('bukti')->isValid()){
             $gambar = $request->file('bukti');
             $extention = $gambar->getClientOriginalExtension();
             $namaFoto = "pengajuan/".date('ymdHis').".".$extention;
             $upload_path = 'public/storage/uploads/pengajuan';
             $request->file('bukti')->move($upload_path,$namaFoto);
           }
 
         $pengajuan = Pengajuan::where('id', $id)->update([
             'bukti' => $namaFoto,
             'status' => 'Sudah Lunas'
         ]);
 
         $data = Pengajuan::where('id', $id)->with('produk.user')->first();
         $this->pushNotif('pengajuan', 'Seseorang telah melakukan pengajuan dengan bayar cast', $data->produk->user->fcm);
   
 
         if ($pengajuan) {
             return response()->json([
                 'status'=>TRUE,
                 'msg'=>'Berhasil mengirim bukti', 
             ],200);
         } else {
             return response()->json([
                 'status'=>FALSE,
                 'msg'=>'Gagal mengirim bukti', 
             ],200);
         }
     }

      //PROSES
    //Dari lunas beri saran
    public function pengajuanUserSelesaicash($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->update([
            'status' => 'Selesai'
        ]);

        // $data = Pengajuan::where('id', $id)->with('user')->first();
        // $this->pushNotif('pengajuan', 'Pengajuan jasa sedang dikerjakan', $data->user->fcm);
  

        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Berhasil Selesai', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal Selesai', 
            ],200);
        }
    }

    //proses user
    //Pelunasan ke selesai
    public function buktiPelunasan(Request $request, $id)
    {
        if($request->file('bukti')->isValid()){
            $gambar = $request->file('bukti');
            $extention = $gambar->getClientOriginalExtension();
            $namaFoto = "pengajuan/".date('ymdHis').".".$extention;
            $upload_path = 'public/storage/uploads/pengajuan';
            $request->file('bukti')->move($upload_path,$namaFoto);
          }

        $pengajuan = Pengajuan::where('id', $id)->update([
            'bukti' => $namaFoto,
            'status' => 'Selesai'
        ]);

        $data = Pengajuan::where('id', $id)->with('produk.user')->first();
        $this->pushNotif('pengajuan', 'Seseorang telah melakukan Pelunasan', $data->produk->user->fcm);
  

        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Terkirim', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal mengirim bukti', 
            ],200);
        }
    }

     //PROSES bayar ditempat
    //Dari pelunasan ke Selesai 
    public function pengajuanPelunasanbayarditempat($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->update([
            'status' => 'Selesai'
        ]);
        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Selesai', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal', 
            ],200);
        
    }
}

    //Dari Selesai ke Histori User
    public function pengajuanSelesaikeHistori($id)
    {
        $pengajuan = Pengajuan::where('id', $id)->update([
            'status' => 'History'
        ]);
        if ($pengajuan) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Berhasil', 
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Gagal', 
            ],200);
        }
    }


    public function search(Request $request)
    {
        $filterKeyword = $request->get('keyword');
        return PengajuanResource::collection(Pengajuan::where('deskripsi','LIKE',"%$filterKeyword%")->get());
    }


    // Notifikasi
   
    public function pushNotif($title, $message, $mfcm) {

        // $mData = [
        //     'title' => "Test Aja",
        //     'body' => "Body Message"
        // ];

        $mData = [
            'title' => $title,
            'body' => $message
        ];

        $fcm[] = $mfcm;

        $payload = [
            'registration_ids' => $fcm,
            'notification' => $mData
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                "Content-type: application/json",
                "Authorization: key=AAAAapUBPnQ:APA91bEg-msQmoZoXd7PRDEQRuawrIp0g3LwzcvRrSqHRPXBzL_zcq38XQ5AbX_6rebkX21o7SylqYfZBICj5plzRygryClFXP89RJ8hXdNzGRxcYmVAKMAuS8AO1Jkulq6Bd_VVUvbq"
            ),
        ));
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload));

        $response = curl_exec($curl);
        curl_close($curl);

        $data = [
            'success' => 1,
            'message' => "Push notif success",
            'data' => $mData,
            'firebase_response' => json_decode($response)
        ];
        return $data;
    }

}
