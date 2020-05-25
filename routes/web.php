<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginn', function () {
    return view('admin/login');
});

Route::get('/registerr', function () {
    return view('admin/register');
});

Route::get('/user', function () {
    return view('user/landing-page');
});

Route::get('/formrs', function () {
    return view('admin/formRs');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile')->name('profile');

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
