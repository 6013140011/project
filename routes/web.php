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


Route::get('/shop', function () {
    return view('shop');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::post('/paymaent/make','PaymentsController@make')->name('payment.make');


