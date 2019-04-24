<?php

Route::name('seller.')->group(function () {

    Route::group([

        'namespace'     => 'Seller',
        // 'middleware'    => 'auth',
        'prefix'        => 'seller',

    ], function () {
        
    
    Route::view('/', 'seller.dashboard')->name('index');
    Route::resource('hewani', 'HewaniController');
    Route::resource('nabati', 'NabatiController');
    Route::resource('pelanggan', 'PelangganController');
    Route::resource('penjualan', 'PenjualanController');
    Route::resource('penduduk', 'PendudukController');
    Route::resource('product','ProductController');
    Route::resource('category','CategoryController');

    });

});
