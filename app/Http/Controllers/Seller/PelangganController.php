<?php

namespace Desaku\Http\Controllers\Seller;

use Illuminate\Http\Request;
use Desaku\Http\Controllers\Controller;
use Desaku\Model\customer;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = customer::all();
        return view('seller.pelanggan.index',['pelanggan'=>$pelanggan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new\Desaku\Model\customer();
        $post->nama     = $request->nama;
        $post->no_hp           = $request->no_hp;       
        $post->tgl_lahir            = $request->tgl_lahir;
        $post->jkel    = $request->jkel;
        $post->alamat = $request->alamat;

        $post->save();
        return redirect('/seller/pelanggan')->with('success','Data telah terkirim');

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
        $pelanggan = customer::find($id);
        return view('seller.pelanggan.edit',['pelanggan'=>$pelanggan]);
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
        $pelanggan = customer::find($id);
        $pelanggan->nama     = $request->nama;
        $pelanggan->no_hp           = $request->no_hp;       
        $pelanggan->tgl_lahir            = $request->tgl_lahir;
        $pelanggan->jkel    = $request->jkel;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->save();
        return redirect('/seller/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = customer::find($id);
        $pelanggan->delete();
        return redirect()->route('seller.pelanggan.index')->with(['success' => 'Data berhasil dihapus']);

    }
}
