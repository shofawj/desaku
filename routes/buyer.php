<?php

Route::name('buyer.')->group(function () {

    Route::group([

        'prefix'        => 'buyer',
        'namespace'     => 'Buyer',

    ], function () {


        Route::resource('type', 'TypeController');

    });

});
