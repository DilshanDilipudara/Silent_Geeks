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
    return view('welcome');
});

Route::get('/Rayan', function () {
    return view('Rayan');
});

Route::get('/Chamikara', function () {
    return view('Chamikara');
});

Route::get('/Dilip', function () {
    return view('Dilip');
});


Route::get('/DilshanCv', function () {
    return view('DilshanCv');
});

Route::get('/RayanCv', function () {
    return view('RayanCv');
});

Route::get('/ChamikaraCv', function () {
    return view('ChamikaraCv');
});
