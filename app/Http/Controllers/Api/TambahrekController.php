<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TambahrekResource;
use App\Tambahrek;
use Validator;
use Storage;

class TambahrekController extends Controller
{
    public function index()
    {
        return TambahrekResource::collection(Tambahrek::all());
    }

    public function myproducttambahrek(Request $request)
    {
       $product = Tambahrek::where('kd_user', $request->kd_user)->get();
       return TambahrekResource::collection($product);
    }

    public function productrekening($id)
    {
        $rek = Tambahrek::where('kd_user', $id)->get();
        if($rek){
            return response()->json([
                'status' => TRUE,
                'msg' => 'Berhasil',
                'rek' => $rek
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'msg' => 'Error',
                'rek' => $rek
            ]);
        }
       }

    public function store(Request $request)
    {
      $input = $request->all();

      $validator = Validator::make($input,[
        'kd_user'=>'required|max:255',
        'jenis_bank'=>'required|max:255',
        'norek'=>'required|max:255',
        'nama'=>'required|max:255',
       
      ]);
      
      if($validator->fails()){
        return response()->json([
          "status"=>FALSE,
          "msg"=>$validator->errors()
        ],400);
      }

    //   if($request->file('gambar')->isValid()){
    //     $gambar = $request->file('gambar');
    //     $extention = $gambar->getClientOriginalExtension();
    //     $namaFoto = "tambahrek/".date('ymdHis').".".$extention;
    //     $upload_path = 'public/uploads/tambahrek';
    //     $request->file('gambar')->move($upload_path,$namaFoto);
    //     $input['gambar'] = $namaFoto;
    //   }

      if(Tambahrek::create($input)){
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
        $tambahrek = Tambahrek::find($id);
        if(is_null($tambahrek)){
            return response()->json([
                "status"=>FALSE,
                "msg"=>'Record Not Found'
            ],404);
        }

        return new TambahrekResource($tambahrek);
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
        $tambahrek = Tambahrek::find($id);
        if(is_null($tambahrek))
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
            ],404);
        }

        $validator = Validator::make($input,[
            'jenis_bank'=>'required|max:255',
            'norek'=>'required|max:255',
            'nama'=>'required|max:255',
        ]);


        if($validator->fails()){
            return response()->json([
                "status"=>FALSE,
                "msg"=>$validator->errors()
            ],400);
        }

        // if($request->hasFile('gambar')){
        //     if($request->file('gambar')->isValid())
        //     {
        //         Storage::disk('local')->delete($tambahrek->gambar);

        //         $gambar = $request->file('gambar');
        //         $extention = $gambar->getClientOriginalExtension();
        //         $namaFoto = "tambahrek/".date('YmdHis').".".$extention;
        //         $upload_path = 'public/uploads/tambahrek';
        //         $request->file('gambar')->move($upload_path,$namaFoto);
        //         $input['gambar'] = $namaFoto;

        //     }   
        // }

        $tambahrek->update($input);
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
        $tambahrek = Tambahrek::find($id);
        if(is_null($tambahrek))
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
            ],404);
        }

        $tambahrek->delete();
        Storage::disk('local')->delete($tambahrek->gambar);
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Data Berhasil dihapus',
        ],200);
    }

    public function search(Request $request)
    {
        $filterKeyword = $request->get('keyword');
        return TambahrekResource::collection(Tambahrek::where('jenis_bank','LIKE',"%$filterKeyword%")->get());
    }
}