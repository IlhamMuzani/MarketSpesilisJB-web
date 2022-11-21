<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produkjasa;
use Storage;



class ProdukjasaController extends Controller
{
   
    public function index(Request $request)
        {
            $listprodukjasa = Produkjasa::paginate(2);
            $filterKeyword = $request->get('keyword');
            if($filterKeyword)
            {
                //dijalankan jika ada pencarian
                $listprodukjasa = Produkjasa::where('nama_toko','LIKE',"%$filterKeyword%")->paginate(2);
            }
            return view('produkjasa.index', compact('listprodukjasa'));
        }


    public function create(Produkjasa $produkjasa)
        {
            return view('produkjasa.create', compact('produkjasa'));
        }

    
    public function store(Request $request)
        {
            $request->validate([
                'kd_user' => 'required',
                'nama_toko' => 'required|min:3',
                'jenis_pembuatan' => 'required',
                'alamat' => 'required',
                'phone' => 'required',
                'harga' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'deskripsi' => 'required',
                'status' => 'required',
                'gambar' => 'required|nullable|image|mimes:jpeg,jpg,png|max:2048',
            ]);

            $fileName = '';
            if($request->file('gambar')->isValid()){
                $gambar = $request->file('gambar');
                $extention = $gambar->getClientOriginalExtension();
                $fileName = "produkjasa/".date('ymdHis').".".$extention;
                $upload_path = 'public/storage/uploads/produkjasa';
                $request->file('gambar')->move($upload_path,$fileName);
                $input['gambar'] = $fileName;
            }
            $data = Produkjasa::create(array_merge($request->all(), [
                'gambar' => $fileName
            ]));
            return redirect('produkjasa');
        }

 
    public function edit(Produkjasa $produkjasa)
        {
            return view('produkjasa.edit', compact('produkjasa'));
        }

    public function update(Request $request, Produkjasa $produkjasa)
        {
            $request->validate([
                'nama_toko' => 'required|min:3',
                'jenis_pembuatan' => 'required',
                'alamat' => 'required',
                'phone' => 'required',
                'harga' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'deskripsi' => 'required',
                'status' => 'required',
                'gambar' => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:2048',
            ]);
            if ($request->gambar) {
                Storage::disk('local')->delete('public/uploads/produkjasa/'.$produkjasa->gambar);
                $gambar = str_replace(' ', '', $request->gambar->getClientOriginalExtension());
                $namaGambar = "produkjasa/".date('YmdHis').".".$gambar;
                $request->gambar->storeAs('public/uploads', $namaGambar);
            }else{
                $namaGambar = $produkjasa->gambar;
            }
            Produkjasa::where('id', $produkjasa->id)
                ->update([
                    'nama_toko' => $request->nama_toko,
                    'jenis_pembuatan' => $request->jenis_pembuatan,
                    'alamat' => $request->alamat,
                    'phone' => $request->phone,
                    'harga' => $request->harga,
                    'latitude' => $request->latitude,
                    'longitude' => $request->longitude,
                    'deskripsi' => $request->deskripsi,
                    'status' => $request->status,
                    'gambar' => $namaGambar,
                ]);
            return redirect('produkjasa');
        }

    public function show(Produkjasa $produkjasa)
    {
        return view('produkjasa.detail', compact('produkjasa'));
    }

  
    public function destroy($id)
        {
            $data = Produkjasa::findOrFail($id);
            $data->delete();
            return redirect()->route('produkjasa.index')->with('status','User Berhasil didelete');
        }

}
