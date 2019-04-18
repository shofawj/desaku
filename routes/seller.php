<?php

Route::name('seller.')->group(function () {

    Route::group([

        // 'middleware'    => 'auth',
        'prefix'        => 'seller',
        // 'namespace'     => 'Seller',

    ], function () {


            
    Route::view('/', 'seller.index')->name('index');
    Route::view('/nabati', 'seller.hayati.nabati.index')->name('nabati');
    Route::view('/hewani', 'seller.hayati.hewani.index')->name('hewani');
    Route::view('/pelanggan', '.seller.pelanggan.index')->name('pelanggan');


    });

});
