<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function loginadmin(Request $requset){

        // dd($requset->all());die();
        $user = User::where('email', $requset->email)->first();

        if($user){

            if(password_verify($requset->password, $user->password)){
                return response()->json([
                    'succes' => 1,
                    'message' => 'Selamat Datang '.$user->name,
                    'user' => $user
                ]);
            }

            return $this->error('Password Salah');
        
        }

        return $this->error('Email Tidak Terdaftar');
    }

    public function registeradmin(Request $requset){
        $validasi = Validator::make($requset->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);

        if($validasi->fails()){
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $user = User::create(array_merge($requset->all(), [
            'password' => bcrypt($requset->password)
        ]));

        if($user){
            return response()->json([
                'succes' => 1,
                'message' => 'Selamat Datang Register Berhasil',
                'user' => $user
            ]);
        }

        return $this->error('registrasi gagal');
    }
    
    public function error($pesan){
        return response()->json([
            'succes' => 0,
            'message' => $pesan
        ]);
    }
   public function login_pelanggan(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'phone'=>'required',
            'password'=>'required'

        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>$validator->errors()
            ],400);
        }

        $phone = $request->input('phone');
        $password = $request->input('password');


        $user = User::where([
            ['phone',$phone],
            ['status', 'pelanggan']
        ])->first();

        if(is_null($user))
        {
            //jika user tidak ditemukan
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Nomor Telepon Tidak Ditemukan'
            ],200);
        }
        else
        {
            //jika user ditemukan
            if(password_verify($password,$user->password))
            {
                if($user->verifikasi){
                     $user->update([
                    'fcm'=>$request->fcm
                    ]);
                    return response()->json([
                        'status'=>TRUE,
                        'msg'=>'Selamat Datang',
                        'user' => $user
                    ],200);
                } else {
                    return response()->json([
                        'status'=>FALSE,
                        'msg'=>'No Telepon Tidak Ditemukan',
                        'user' => $user
                    ],200);
                }

                //jika password sesuai
            }
            else
            {
                //jika password tidak sesuai
                return response()->json([
                    'status'=>FALSE,
                    'msg'=>'Password Tidak Sesuai',
                ],200);
            }
        }
    }


    public function login_jasa(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'phone'=>'required',
            'password'=>'required'

        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>$validator->errors()
            ],400);
        }

        $phone = $request->input('phone');
        $password = $request->input('password');

        $user = User::where([
            ['phone',$phone],
            ['status', 'jasa']
        ])->first();

        if(is_null($user))
        {
            //jika user tidak ditemukan
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Nomor Telepon Tidak Ditemukan',
                 'user' => $user
            ],200);
        }
        else
        {
            //jika user ditemukan
            if(password_verify($password,$user->password))
            {
                if($user->verifikasi){
                      $user->update([
                'fcm'=>$request->fcm
                 ]);
                    return response()->json([
                        'status'=>TRUE,
                        'msg'=>'Selamat Datang',
                        'user' => $user
                    ],200);
                } else {
                    return response()->json([
                        'status'=>FALSE,
                        'msg'=>'No Telepon Belum Terdaftar',
                        'user' => $user
                    ],200);
                }

            }
            else
            {
                //jika password tidak sesuai
                return response()->json([
                    'status'=>FALSE,
                    'msg'=>'Password Tidak Sesuai',
                ],200);
            }
        }
    }
    public function register_pelanggan(Request $requset){
        $validasi = Validator::make($requset->all(), [
            'username' => 'required',
            'password' => 'required|min:6',
            'alamat' => 'required',
            'phone' => 'required'
            
        ]);

        if($validasi->fails()){
            $val = $validasi->errors()->all();
            return response()->json([
                'status' => FALSE,
                'msg' => $val[0]
            ]);
            
        }

        $user = User::create(array_merge($requset->all(),[
            'password' => bcrypt($requset->password),
            'status' => 'pelanggan',
            'gambar' => '',
            'kecamatan' => '',
            'kelurahan' => '',
            'nama_toko' => '',
            'deskripsi' => '',
            'latitude' => '',
            'longitude' => ''

        ]));
                
        if($user){
            // $user->sendApiEmailVerificationNotification();
                return response()->json([
                    'status' => TRUE,
                    'msg' => 'Register Berhasil, Silakan Login',
                    'user' => $user
                ]);
        }
        return $this->error('Registrasi Gagal');
    }

    public function register_jasa(Request $requset){
        $validasi = Validator::make($requset->all(), [
            'username' => 'required',
            'password' => 'required|min:6',
            'nama_toko'=>'required|max:255',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'alamat' => 'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'phone' => 'required'
            
        ]);

        if($validasi->fails()){
            $val = $validasi->errors()->all();
            return response()->json([
                'status' => FALSE,
                'msg' => $val[0]
            ]);
            
        }

        $user = User::create(array_merge($requset->all(),[
            'password' => bcrypt($requset->password),
            'status' => 'jasa',
            'gambar' => '',
            'deskripsi' => ''
        ]));
                
        if($user){
            // $user->sendApiEmailVerificationNotification();
                return response()->json([
                    'status' => TRUE,
                    'msg' => 'Register Berhasil, Silakan Login',
                    'user' => $user
                ]);
        }
        return $this->error('Registrasi Gagal');
    }

    public function userDetail($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            return response()->json([
                'status'=>TRUE,
                'msg'=>'Berhasil menampilkan detail user',
                'user'=>$user
            ],200);
        } else {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
                'user'=>$user
            ],404);
        }
    }

  
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $user = user::find($id);
        if(is_null($user))
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
            ],404);
        }

        $validator = Validator::make($input,[
            'username' => 'required',
            'alamat' => 'required',
            'gambar'=>'sometimes|image|mimes:jpeg,jpg,png|max:2048',
            'phone' => 'required'
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
                $gambar = $request->file('gambar');
                $extention = $gambar->getClientOriginalExtension();
                $namaFoto = "user/".date('YmdHis').".".$extention;
                $upload_path = 'public//storage/uploads/user';
                $request->file('gambar')->move($upload_path,$namaFoto);
                $input['gambar'] = $namaFoto;
            }   
        }

        $user = User::where('id', $id)->first();
        if ($user) {
            $update = $user->update([
                'username' => $request->username,
                'alamat' => $request->alamat,
                'phone' => $request->phone
            ]);
            if ($update) {
                if ($request->phone != $request->phone_baru) {
                    $check = User::where('phone', 'LIKE', $request->phone_baru)->first();
                    if ($check) {
                        return $this->error('Nomor telepon sudah digunakan');
                    } else {
                        return response()->json([
                            'status' => TRUE,
                            'msg' => 'Lakukan verifikasi OTP untuk memperbarui nomor telepon',
                            'user' => $user
                        ]);
                    }
                } else {
                    return response()->json([
                        'status' => TRUE,
                        'msg' => 'Profile berhasil diperbarui',
                        'user' => $user
                    ]);
                }
            } else {
                return $this->error('Profile gagal diperbarui');
            }
        } else {
            return $this->error('Gagal menemukan user');
        }
        }

        public function userUpdatePhone(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|unique:users,phone,' . $id . ',id',
        ]);
        if ($validator->fails()) {
            $error = $validator->errors()->all();
            return $this->error($error[0]);
        }
        $user = User::where('id', $id)
            ->update([
                'phone' => $request->phone
            ]);
        if ($user) {
            return response()->json([
                'status' => TRUE,
                'msg' => 'Profile berhasil diperbarui',
            ]);
        }
        return $this->error('Profile gagal diperbarui');
    }

        public function updateprofiljasa(Request $request, $id)
    {
        $input = $request->all();
        $user = user::find($id);
        if(is_null($user))
        {
            return response()->json([
                'status'=>FALSE,
                'msg'=>'Record Not Found',
            ],404);
        }

        $validator = Validator::make($input,[
            'username' => 'required',
            'nama_toko' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'gambar'=>'sometimes|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi' => 'required',
            'phone' => 'required'
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
                $gambar = $request->file('gambar');
                $extention = $gambar->getClientOriginalExtension();
                $namaFoto = "user/".date('YmdHis').".".$extention;
                $upload_path = 'public//storage/uploads/user';
                $request->file('gambar')->move($upload_path,$namaFoto);
                $input['gambar'] = $namaFoto;
            }   
        }

        $user = User::where('id', $id)->first();
        if ($user) {
            $update = $user->update([
            //   'gambar' => $namaFoto,
                'username' => $request->username,
                'nama_toko' => $request->nama_toko,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'alamat' => $request->alamat,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'deskripsi' => $request->deskripsi,
                'phone' => $request->phone,
            ]);
            if ($update) {
                if ($request->phone != $request->phone_baru) {
                    $check = User::where('phone', 'LIKE', $request->phone_baru)->first();
                    if ($check) {
                        return $this->error('Nomor telepon sudah digunakan');
                    } else {
                        return response()->json([
                            'status' => TRUE,
                            'msg' => 'Lakukan verifikasi OTP untuk memperbarui nomor telepon',
                            'user' => $user
                        ]);
                    }
                } else {
                    return response()->json([
                        'status' => TRUE,
                        'msg' => 'Profile berhasil diperbarui',
                        'user' => $user
                    ]);
                }
            } else {
                return $this->error('Profile gagal diperbarui');
            }
        } else {
            return $this->error('Gagal menemukan user');
        }
        }
        public function userVerify($id)
    {
        $user = User::where('id', $id)->first();
        $user->update([
            'verifikasi' => true
        ]);
        if ($user) {
            return response()->json([
                'status' => TRUE,
                'msg' => 'Verifikasi dengan kode OTP berhasil',
                'user' => $user
            ]);
        } else {
            return $this->error('Gagal verifikasi akun!');
        }
    }
    
    public function lupapassword_pelanggan(Request $request)
    {

        $phone = $request->input('phone');
        $status = $request->input('status');
    
        $user = User::where([
            ['phone',$phone],
            ['status', $status]
        ])->first();

        if ($user) {
            return response()->json([
                'status' => TRUE,
                'msg' => 'Nomor Telepon Ditemukan',
                'user' => $user
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'msg' => 'Nomor Telepon Tidak Ditemukan',
            ]);
        }
    }   

    public function passwordbaru_pelanggan(Request $requset, $id){
    $validasi = Validator::make($requset->all(), [
        'password' => 'required|min:6',
        
    ]);

    if($validasi->fails()){
        $val = $validasi->errors()->all();
        return response()->json([
            'status' => FALSE,
            'msg' => $val[0]
        ]);
        
    }

    $user = User::where('id',$id)->update([
        'password' => bcrypt($requset->password),

    ]);
            
    if($user){
        // $user->sendApiEmailVerificationNotification();
            return response()->json([
                'status' => TRUE,
                'msg' => 'Password Berhasil Diperbarui, Silakan Login',
                'user' => $user
            ]);
    }
}

 public function lupapassword_jasa(Request $request)
    {

        $phone = $request->input('phone');
        $status = $request->input('status');
    
        $user = User::where([
            ['phone',$phone],
            ['status', $status]
        ])->first();

        if ($user) {
            return response()->json([
                'status' => TRUE,
                'msg' => 'Nomor Telepon Ditemukan',
                'user' => $user
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'msg' => 'Nomor Telepon Tidak Ditemukan',
            ]);
        }
    }
    
    public function userUpdatePassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6|confirmed'
        ]);
        if ($validator->fails()) {
            $error = $validator->errors()->all();
            return $this->error($error[0]);
        }
        $user = User::where('id', $id)
            ->update([
                'password' => bcrypt($request->password)
            ]);
        if ($user) {
            return response()->json([
                'status' => TRUE,
                'msg' => 'Password berhasil diperbarui',
            ]);
        }
        return $this->error('Password gagal diperbarui');
    }
}

