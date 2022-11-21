<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AduanjasaResource;
use App\Aduanjasa;
use Validator;
use Storage;

class AduanjasaController extends Controller
{
    public function index()
    {
        return AduanjasaResource::collection(Aduanjasa::all());
        // return AduanjasaResource::collection(Aduanjasa::where([
        //     'id',$id]));
    }

    // public function myproduct(Request $request)
    // {
    //    $product = Aduanjasa::where('jasausers_id', $request->jasausers_id)->get();
    //    return AduanjasaResource::collection($product);
    // }


    public function store(Request $request)
    {
      $input = $request->all();

      $validator = Validator::make($input,[
      
        'deskripsi'=>'required|max:255',
        'gambar'=>'required|image|mimes:jpeg,jpg,png|max:2048'
       
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
        $namaFoto = "aduanjasa/".date('ymdHis').".".$extention;
        $upload_path = 'public/uploads/aduanjasa';
        $request->file('gambar')->move($upload_path,$namaFoto);
        $input['gambar'] = $namaFoto;
      }

      if(Aduanjasa::create($input)){
          //memberi respon berhasil
          return response()->json([
            'status'=>TRUE,
            'msg'=>'Terimakasih, Laporan Anda Terkirim'
          ],201);
      }
      else
      {
          //Memberi respon gagal
          return response()->json([
            'status'=>FALSE,
            'msg'=>'gagal Melaporkan'
          ],200);
        }
    }

    public function show($id)
    {
        $aduanjasa = Adunajasa::find($id);
        if(is_null($aduanjasa)){
            return response()->json([
                "status"=>FALSE,
                "msg"=>'Record Not Found'
            ],404);
        }

        return new AduanjasaResource($aduanjasa);
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
        $aduanjasa = Aduanjasa::find($id);
        if(is_null($aduanjasa))
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
            ],404);
        }

        $validator = Validator::make($input,[
        
            'deskripsi'=>'required|max:255',
            'gambar'=>'sometimes|image|mimes:jpeg,jpg,png|max:2048'
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
               
                Storage::disk('local')->delete($aduanjasa->gambar);

                $gambar = $request->file('gambar');
                $extention = $gambar->getClientOriginalExtension();
                $namaFoto = "aduanjasa/".date('YmdHis').".".$extention;
                $upload_path = 'public/uploads/aduanjasa';
                $request->file('gambar')->move($upload_path,$namaFoto);
                $input['gambar'] = $namaFoto;

            }   
        }

        $aduanjasa->update($input);
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
        $aduanjasa = Aduanjasa::find($id);
        if(is_null($aduanjasa))
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
            ],404);
        }

        $aduanjasa->delete();
        Storage::disk('local')->delete($aduanjasa->gambar);
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Data Berhasil dihapus',
        ],200);
    }

    public function search(Request $request)
    {
        $filterKeyword = $request->get('keyword');
        return AduanjasaResource::collection(Aduanjasa::where('deskripsi','LIKE',"%$filterKeyword%")->get());
    }
}