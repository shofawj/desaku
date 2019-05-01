<?php

namespace Desaku\Http\Controllers\Seller;

use Illuminate\Http\Request;
use Desaku\Http\Controllers\Controller;
use Desaku\Model\villager;
use Desaku\Model\category;
use Desaku\Model\sales;
use Desaku\Model\customer;
use Desaku\Model\Product;



class DashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




    //	$villager = DB::table('villagers')->get();
 
    	// mengirim data pegawai ke view index
      //return view('index',['pegawai' => $pegawai]);
      
      // penduduk
        $villager = villager::all();
        $totPenduduk = $villager->count();

        //penjualan
        $seles = sales::all()->count();

        //pelanggan
        $customer = customer::all()->count();

        // Product
        $produk = Product::all()->count();

        // Product -> hewani
        $productHewani = product::where('jenis', 'Hewani')->count();
        
        // product -> nabati

        $productNabati = product::where('jenis', 'Nabati')->count();


        // pendapatan
        $pendapatan = sales::all()->sum('total_harga');

        
        return view('seller.dashboard', ['totPenduduk'=>$totPenduduk, 'seles'=>$seles,'customer'=>$customer,'produk'=>$produk,
        'productHewani'=>$productHewani,
        'productNabati'=>$productNabati,
        'pendapatan'=>$pendapatan]);
    
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
        // $post = new\Desaku\Model\category();
        // $post->nama_kategori     = $request->nama_kategori;
        // $post->save();
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
        // $kategori = category::find($id);
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
        // $kategori = category::find($id);
        // $kategori->nama_kategori     = $request->nama_kategori;
        // $kategori->save();
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
        // $kategori = category::find($id);
        // $kategori->delete();
        return redirect()->route('seller.category.index')->with(['success' => 'Data berhasil dihapus']);

    }

    public function count()
    {
        $dasboard  = villager::all();
        

        return view('seller.index',[
            'dasboard' => $dasboard
        ]);
    }
}
