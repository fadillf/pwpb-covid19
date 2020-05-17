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

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/profile', function () {
    return view('admin/profile');
});

Route::get('/tabelArtikel', function () {
    return view('admin/tabelArtikel');
});

Route::get('/formArtikel', function () {
    return view('admin/formArtikel');
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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

