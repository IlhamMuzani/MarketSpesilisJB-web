<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajuan;
use Storage;



class PengajuanController extends Controller
{
    public function index(Request $request)
        {
            $listpengajuan = Pengajuan::paginate(2);
            $filterKeyword = $request->get('keyword');
            if($filterKeyword)
            {
                //dijalankan jika ada pencarian
                $listpengajuan = Pengajuan::where('status','LIKE',"%$filterKeyword%")->paginate(2);
            }
            return view('pengajuan.index', compact('listpengajuan'));
        }

    public function show(Pengajuan $pengajuan)
        {
            return view('pengajuan.detail', compact('pengajuan'));
        }

    public function destroy($id)
        {
            $data = Pengajuan::findOrFail($id);
            $data->delete();
            return redirect()->route('pengajuan.index')->with('status','User Berhasil didelete');
        }
        
      public function tampilinvoice($id)
        {
            $listdetail = Pengajuan::where('id', $id)->first();
            return view('invoice', compact('listdetail'));
        }

}