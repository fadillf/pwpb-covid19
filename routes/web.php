<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('user/landing-page');
});

Route::get('/rumahsakit', function () {
    return view('user/rumahsakit');
});
Route::get('/contact-us', function () {
    return view('user/contact-us');
});

Route::get('/terkini', function () {
    return view('user/terkini');
});

Route::get('/contact', function () {
    return view('user/contactUs');
});

Route::get('/artikell', function () {
    return view('user/artikel');
});

Route::get('/detail', function () {
    return view('user/detailArtikel');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'ProfileController@edit')->name('profile');
    Route::patch('/profile/update', 'ProfileController@update')->name('profile.update');
});
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

Route::get('/kategori', 'KategoriController@index')->name('kategori');


Route::get('/kategori/tambah', 'KategoriController@create')->name('kategori/tambah');
Route::delete('/kategori/{id}', 'KategoriController@destroy');

Route::get('/artikel', 'ArtikelController@index')->name('artikel');

Route::get('/artikel/tambah', 'ArtikelController@create')->name('artikel/tambah');

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

