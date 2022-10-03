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

// Route::get('/homepage', 'ComicsController@index')->name('homepage');

// Puoi usare questo
Route::resource('comics', 'ComicsController');

// oppure

/*
Route::get('/comics', 'ComicsController@index')->name('comics.index');
Route::get('/comics/{comic}', 'ComicsController@show')->name('comics.show');
Route::get('/comics/create', 'ComicsController@create')->name('comics.create');
...
*/
