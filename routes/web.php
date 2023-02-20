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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/pharmacy', function () {
    return view('pharmacy');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/pricing', function () {
    return view('pricing');
});


Route::get('/products', function () {
    return view('products');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/partners', function () {
    return view('partners');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/press', function () {
    return view('press');
});

Route::get('/community', function () {
    return view('community');
});


Route::get('/indonesia', function () {
    return view('indonesia');
});

Route::get('/condition', function () {
    return view('condition');
});

Route::get('/privacy', function () {
    return view('privacy');
});