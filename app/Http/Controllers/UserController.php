<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Storage;



class UserController extends Controller
{
    
    public function index(Request $request)
        {
            $pelanggan = User::where('status', 'pelanggan')->paginate(2);
            $jasa = User::where('status', 'jasa')->paginate(2);
            $filterKeyword = $request->get('keyword');
            if($filterKeyword)
            {
                //dijalankan jika ada pencarian
                $pelanggan = User::where('username','LIKE',"%$filterKeyword%")->paginate(2);
            }
            return view('user.index', compact(['pelanggan', 'jasa']));
        }

    
    public function create(User $user)
        {
            return view('user.create', compact('user'));
        }

    
    public function store(Request $request)
        {
            
            return redirect('user');
        }


    public function edit(user $user)
        {
            return view('user.edit', compact('user'));
        }

    public function update(Request $request, User $user)
        {
            $request->validate([
                'username' => 'required|min:3',
                'alamat' => 'required',
                'phone' => 'required',
                'status' => 'required',
            ]);
        
            User::where('id', $user->id)
                ->update([
                    'username' => $request->username,
                    'alamat' => $request->alamat,
                    'phone' => $request->phone,
                    'status' => $request->status,
                
                ]);
            return redirect('user');
        }

        public function show(User $user)
        {
            return view('user.detail', compact('user'));
        }

    public function destroy($id)
        {
            $data = User::findOrFail($id);
            $data->delete();
            return redirect()->route('user.index')->with('status','User Berhasil didelete');
        }

}
