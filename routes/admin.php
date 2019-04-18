<?php

Route::name('admin.')->group(function () {

    Route::group([


        // 'namespace'     => 'Admin',
        // 'middleware'    => 'auth',
        'prefix'        => 'admin',

    ], function () {

            
    Route::view('/', 'admin.index')->name('index');


    });

});
