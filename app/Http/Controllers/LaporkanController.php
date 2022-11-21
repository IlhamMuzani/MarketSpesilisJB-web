<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporkan;
use Storage;



class LaporkanController extends Controller
{
    public function index(Request $request)
        {
            $listlaporkan = Laporkan::orderBy('id', 'DESC')->paginate(2);
            $filterKeyword = $request->get('keyword');
            if($filterKeyword)
            {
                //dijalankan jika ada pencarian
                $listlaporkan = Laporkan::where('kd_user','LIKE',"%$filterKeyword%")->paginate(2);
            }
            return view('laporkan.index', compact('listlaporkan'));
        }

    public function show(Laporkan $laporkan)
        {
            return view('laporkan.detail', compact('laporkan'));
        }

    public function destroy($id)
        {
            $data = Laporkan::findOrFail($id);
            $data->delete();
            return redirect()->route('laporkan.index')->with('status','Data Berhasil didelete');
        }

}