<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require('admin.php');
require('buyer.php');
require('seller.php');
require('report.php');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::view('/contact', 'frontend.landing-page.contact.index')->name('landing-page.contact.index');

Route::view('/about', 'frontend.landing-page.about.index')->name('landing-page.about.index');

Route::view('/kategori', 'frontend.landing-page.category.index')->name('landing-page.category.index');

Route::view('/kategori/article', 'frontend.landing-page.article.index')->name('landing-page.article.index');

Route::view('/favorite', 'frontend.landing-page.favorite.index')->name('landing-page.favorite.index');

Route::view('/admin', 'frontend.admin.index')->name('landing-page.admin.index');

Route::view('/admin/nabati', 'frontend.admin.hayati.nabati.index')->name('landing-page.admin.nabati');

Route::view('/admin/hewani', 'frontend.admin.hayati.hewani.index')->name('landing-page.admin.hewani');

Route::view('/admin/pelanggan', 'frontend.admin.pelanggan.index')->name('landing-page.admin.pelanggan');
