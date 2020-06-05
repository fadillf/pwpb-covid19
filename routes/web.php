<?php

use Illuminate\Support\Facades\Route;

/* 
|==================================
|              USER
|==================================
*/
Route::get('/', function () {
    return view('user/landing-page');
})->name('/');

Route::get('/rumahsakit','RsUserController@index')->name('rumahsakit');

Route::get('/contact-us', 'ContactController@index')->name('contact');
Route::post('/contact-us', 'ContactController@sendMail');

Route::get('/terkini','InfoController@index')->name('terkini');




Route::get('/informasi/home','InformasiController@index')->name('informasi');
Route::get('/informasi/{artikel}','InformasiController@show')->name('informasi.detail');
Route::get('/informasi/kategori/{slug}','InformasiController@kategori')->name('informasi.kategori');


/* 
|==================================
|              ADMIN
|==================================
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'ProfileController@edit')->name('profile');
    Route::patch('/profile/update', 'ProfileController@update')->name('profile.update');
});
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::get('/kategori/tambah', 'KategoriController@create')->name('kategori/tambah');
Route::post('/kategori','KategoriController@store');
Route::get('/kategori/{id}/edit', 'KategoriController@edit');
Route::patch('/kategori/{id}', 'KategoriController@update');
Route::delete('/kategori/{id}', 'KategoriController@destroy');

Route::get('/artikel', 'ArtikelController@index')->name('artikel');
Route::get('/artikel/tambah', 'ArtikelController@create')->name('artikel/tambah');
Route::post('/artikel','ArtikelController@store');
Route::get('/artikel/{id}/edit', 'ArtikelController@edit');
Route::patch('/artikel/{id}', 'ArtikelController@update');
Route::delete('/artikel/{id}', 'ArtikelController@destroy');

Route::get('/admin/rumahsakit', 'RsController@index')->name('admin.rumahsakit');
Route::get('/admin/rumahsakit/tambah', 'RsController@create')->name('rumahsakit.tambah');
Route::post('/admin/rumahsakit','RsController@store');
Route::get('/admin/rumahsakit/{id}/edit', 'RsController@edit');
Route::patch('/admin/rumahsakit/{id}', 'RsController@update');
Route::delete('/admin/rumahsakit/{id}', 'RsController@destroy');
