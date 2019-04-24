<?php

Route::name('landing-page.')->group(function () {

    Route::group([

        // 'prefix'        => 'buyer',
        // 'namespace'     => 'Buyer',

    ], function () {


        Route::get('/', function () {
            return view('welcome');
        });
        Route::view('/contact', 'landing-page.contact.index')->name('contact.index');
        Route::view('/about', 'landing-page.about.index')->name('about.index');
        Route::view('/kategori', 'landing-page.category.index')->name('category.index');
        Route::view('/kategori/article', 'landing-page.article.index')->name('article.index');
        Route::view('/favorite', 'landing-page.favorite.index')->name('favorite.index')->middleware('auth');        

    });

});
