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

Route::post('/fblogin','fishcontroller@savefish');
Route::get('/dbshow','dbscontroller@showdb')->name('dbshow');
Route::get('/dbdel/{idxyz}','dbscontroller@deldb');
// Route::post('/dbshow','fishcontroller@editdb');

Auth::routes();

// Route::get('/dbshow', 'HomeController@index')->name('dbshow');
