<?php

Route::name('seller.')->group(function () {

    Route::group([

        // 'namespace'     => 'Seller',
        // 'middleware'    => 'auth',
        'prefix'        => 'seller',

    ], function () {
        
    
    Route::view('/', 'seller.dashboard')->name('index');
    Route::resource('hewani', 'Seller\HewaniController');
    Route::resource('nabati', 'Seller\NabatiController');
    Route::resource('pelanggan', 'Seller\PelangganController');
    Route::resource('penjualan', 'Seller\PenjualanController');
    Route::resource('penduduk', 'Seller\PendudukController');

    });

});
