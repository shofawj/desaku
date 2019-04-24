<?php

namespace Desaku\Http\Controllers\Seller;

use Desaku\Model\Product;
use Desaku\Model\category;
use Desaku\Model\villager;
use Illuminate\Http\Request;
use Desaku\Http\Controllers\Controller;

class HewaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hewani = Product::all();
        return view('seller.hayati.hewani.index',['hewani'=>$hewani]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduk = villager::all();
        $kategori = category::all();
        return view('seller.hayati.hewani.create',['penduduk'=>$penduduk,'kategori'=>$kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new\Desaku\Model\Product();
        $post->nama = $request->nama;
        $post->deskripsi = $request->deskripsi;
        $post->jenis = $request->jenis;
        $post->harga = $request->harga;
        $post->image = $request->image;
        $post->id_category = $request->id_category;
        $post->id_villager = $request->id_villager;
        $post->save();
        return redirect('/seller/hewani')->with('success','Data telah terkirim');
  
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
        $hewani = Product::find($id);
        return view('seller.product.edit',['hewani'=>$hewani]);
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
         $hewani = Product::find($id);
        $hewani->nama = $request->nama;
        $hewani->deskripsi = $request->deskripsi;
        $hewani->jenis = $request->jenis;
        $hewani->harga = $request->harga;
        $hewani->image = $request->image;
        $hewani->save();

        return redirect('/seller/hewani');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hewani = Product::find($id);
        $hewani->delete();
        return redirect()->route('seller.hayati.hewani.index')->with(['success' => 'Data berhasil dihapus']);
    }
}
