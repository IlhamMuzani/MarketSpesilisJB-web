<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aduanjasa;


class AduanjasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user['listUser'] = Aduanjasa::all();
        return view('aduanjasa')->with( $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());die();
        $fileName = '';
        if($request->gambar->getClientOriginalName()){
            $file = str_replace(' ', '', $request->gambar->getClientOriginalName());
            $fileName = date('mYdHs').rand(1,999).' '.$file;
            $request->gambar->storeAs('public/produkjasa', $fileName);
        }
        $user = Produkjasa::create(array_merge($request->all(), [
            'gambar' => $fileName
        ]));
        return redirect('produkjasa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
