<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SaranResource;
use App\Saran;
use Validator;
use Storage;

class SaranController extends Controller
{
    public function index()
    {
        return SaranResource::collection(Saran::all());
    }

    public function saranperproduk($id)
    {
        $saran = Saran::where('kd_pengajuan', $id)->with(['user'])->get();

        if ($saran) {
         return response()->json([
             'status'=>TRUE,
             'msg'=>'Berhasil menampilkan saran saran',
             'saran' => $saran
         ],201);   
        }
     }

    public function semuasaranperproduk($id)
    {
       $saran = Saran::where([
           ['kd_produk', $id,],
       ['status', '!=', 'material'],
       ])->with(['user'])->get();

       if ($saran) {
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Berhasil tampil semua saran',
            'saran' => $saran
        ],201);   
       }
    }


    public function store(Request $request)
    {
      $input = $request->all();

      $validator = Validator::make($input,[
      
        'deskripsi'=>'required|max:255',
        'status'=>'required|max:225',
        'rating'=>'required|max:225'
       
      ]);

      $saran = Saran::create($input);
      $data = Saran::where('id', $saran->id)->with('produk.user')->first();
      $this->pushNotif('pengajuan', 'Seseorang telah memberikan saran', $data->produk->user->fcm);

      
      if($saran){
          //memberi respon berhasil
          return response()->json([
            'status'=>TRUE,
            'msg'=>'Terimakasih, Saran Terkirim'
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
        $saran = Saran::find($id);
        if(is_null($saran)){
            return response()->json([
                "status"=>FALSE,
                "msg"=>'Record Not Found'
            ],404);
        }

        return new SaranResource($saran);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $saran = Saran::find($id);
        if(is_null($saran))
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
            ],404);
        }

        $saran->delete();
        Storage::disk('local')->delete($saran->gambar);
        return response()->json([
            'status'=>TRUE,
            'msg'=>'Data Berhasil dihapus',
        ],200);
    }

    //Notifikasi
   
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
