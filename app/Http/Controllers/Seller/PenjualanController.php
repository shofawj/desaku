<?php

namespace Desaku\Http\Controllers\Seller;

use Illuminate\Http\Request;
use Desaku\Http\Controllers\Controller;
use Desaku\Model\customer;
use Desaku\Model\Product;
use Desaku\Model\sales;
class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = sales::all();

        return view('seller.penjualan.index',['penjualan'=>$penjualan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = customer::all();
        $produk = Product::all();
        return view('seller.penjualan.create',['customer'=>$customer,'produk'=>$produk]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new\Desaku\Model\sales();
        $post->id_customer     = $request->id_customer;
        $post->id_product     = $request->id_product;
        $post->jumlah_beli     = $request->jumlah_beli;
        $post->harga     = $request->harga;
        $post->tanggal_beli     = $request->tanggal_beli;
        // 
        $harga_pembelian = $post->harga;
        $jumlah_pembelian = $post->jumlah_beli;
        $post->total_harga = $request->total_harga = $jumlah_pembelian * $harga_pembelian;
        // 
        ;
        $post->save();
        return redirect('/seller/penjualan')->with('success','Data telah terkirim');

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
