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

Route::get('/', function () {
    return view('index');
});

Route::get('/o-nama', function () {
    return view('o-nama');
});

Route::get('/cenovnik', function () {
    return view('cenovnik');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/posao', function () {
    return view('posao');
});

Route::get('/galerija', function () {
    return view('galerija');
});
