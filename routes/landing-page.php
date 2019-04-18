<?php

Route::name('landing-page.')->group(function () {

    Route::group([

        // 'prefix'        => 'buyer',
        // 'namespace'     => 'Buyer',

    ], function () {


        Route::view('/contact', 'frontend.landing-page.contact.index')->name('contact.index');
        Route::view('/about', 'frontend.landing-page.about.index')->name('about.index');
        Route::view('/kategori', 'frontend.landing-page.category.index')->name('category.index');
        Route::view('/kategori/article', 'frontend.landing-page.article.index')->name('article.index');
        Route::view('/favorite', 'frontend.landing-page.favorite.index')->name('favorite.index');        

    });

});
