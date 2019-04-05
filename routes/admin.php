<?php

Route::name('admin.')->group(function () {

    Route::group([

        'prefix'        => 'admin',
        'namespace'     => 'Admin',

    ], function () {

      Route::view('/nabati', 'frontend.admin.hayati.nabati.index')->name('landing-page.admin.nabati');
      
      Route::view('/hewani', 'frontend.admin.hayati.hewani.index')->name('landing-page.admin.hewani');

    });

});
