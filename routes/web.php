<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\views;
use App\Http\Controllers\HomeController;

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
    return view('child');
});

Route::get('/maps', function () {
    return view('layouts/maps');
});

Route::get('/content', function () {
    return view('layouts/content');
});

Route::get('/omahkayu', function () {
    return view('layouts/omahkayu');
});

Route::get('/tamankelinci', function () {
    return view('layouts/tamankelinci');
});

Route::get('/bns', function () {
    return view('layouts/bns');
});

Route::get('/museumangkut', function () {
    return view('layouts/museumangkut');
});

Route::get('/kaliwaturafting', function () {
    return view('layouts/kaliwaturafting');
});
Auth::routes();

