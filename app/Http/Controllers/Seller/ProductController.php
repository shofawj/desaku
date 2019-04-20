<?php

namespace Desaku\Http\Controllers\Seller;
use Desaku\Model\Product;

use Illuminate\Http\Request;
use Desaku\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seller.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.product.create');
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
        $post->nama_product     = $request->nama;
        $post->deskripsi_product           = $request->alamat;       
        $post->jenis_product            = $request->no_hp;

        $this->validate($request, [
           
            'file' => 'required|file|max:2000'
        ]);

        $uploadedFile = $request->file('file');        
        $postImage = $uploadedFile->store('public/files');
        $post = File::create([
            'image' => $postImage
        ]);    

        if($post->save()==0){
            return redirect('/seller/product/create')->withError(sprintf('Data tidak tersimpan'));

        }else{
            return redirect('/seller/product')->withSuccess(sprintf('success','Data telah terkirim'));

        };
        

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
