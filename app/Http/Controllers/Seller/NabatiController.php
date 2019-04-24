<?php

namespace Desaku\Http\Controllers\Seller;

use Desaku\Model\product;
use Desaku\Model\category;
use Desaku\Model\villager;
use Illuminate\Http\Request;
use Desaku\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class NabatiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $product = product::where('jenis', 'nabati')->get();
        // $nabati = Product::all();
        // $nabati = DB::table('products')->where('jenis',$request->jenis = "nabati")->get();
        return view('seller.hayati.nabati.index',['product'=>$product]);
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
        return view('seller.hayati.nabati.create',['penduduk'=>$penduduk,'kategori'=>$kategori]);
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
        return redirect('/seller/nabati')->with('success','Data telah terkirim');

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
        $penduduk = villager::all();
        $kategori = category::all();
        $nabati = Product::all();
        return view('seller.hayati.nabati.edit',['nabati'=>$nabati,'penduduk'=>$penduduk,'kategori'=>$kategori]);
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
        $nabati = Product::find($id);
        $nabati->nama = $request->nama;
        $nabati->deskripsi = $request->deskripsi;
        $nabati->jenis = $request->jenis;
        $nabati->harga = $request->harga;
        $nabati->image = $request->image;
        $nabati->id_category = $request->id_category;
        $nabati->id_villager = $request->id_villager;
        $nabati->save();

        return redirect('/seller/nabati');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nabati = Product::find($id);
        $nabati->delete();
        return redirect()->route('seller.nabati.index')->with(['success' => 'Data berhasil dihapus']);
    }
}
