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
    return view('fish');
});

Route::post('/login','fishcontroller@savefish');
Route::get('/dbshow','fishcontroller@showdb');
Route::get('/dbdel/{idxyz}','fishcontroller@deldb');
// Route::post('/dbshow','fishcontroller@editdb');
