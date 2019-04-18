<?php

Route::name('seller.')->group(function () {

    Route::group([

        'middleware'    => 'auth',
        'prefix'        => 'seller',
        'namespace'     => 'Seller',

    ], function () {


        Route::resource('type', 'TypeController');

    });

});
