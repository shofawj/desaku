<?php

namespace Desaku\Http\Controllers\Seller;

use Desaku\Model\Product;
use Desaku\Model\category;
use Desaku\Model\villager;
use Illuminate\Http\Request;
use Desaku\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HewaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product = product::where('jenis', 'Hewani')->get();
        return view('seller.hayati.hewani.index',['product'=>$product]);
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
        $hewani = product::find($id);
        $penduduk = villager::all();
        $kategori = category::all();
        return view('seller.hayati.hewani.edit',['hewani'=>$hewani,'penduduk'=>$penduduk,'kategori'=>$kategori]);
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
        $hewani->id_category = $request->id_category;
        $hewani->id_villager = $request->id_villager;
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
        return redirect()->route('seller.hewani.index')->with(['success' => 'Data berhasil dihapus']);
    }
}
