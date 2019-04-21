<?php

namespace Desaku\Http\Controllers\Seller;
use Desaku\Model\category;
use Illuminate\Http\Request;
use Desaku\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = category::all();
        return view('seller.category.index',['kategori'=> $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new\Desaku\Model\category();
        $post->nama_kategori     = $request->nama_kategori;
        $post->save();
        return redirect('/seller/category')->with('success','Data telah terkirim');

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
        $kategori = category::find($id);
        return view('seller.category.edit',['kategori'=> $kategori]);

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
        $kategori = category::find($id);
        $kategori->nama_kategori     = $request->nama_kategori;
        $kategori->save();
        return redirect('/seller/category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = category::find($id);
        $kategori->delete();
        return redirect()->route('seller.category.index')->with(['success' => 'Data berhasil dihapus']);

    }
}
