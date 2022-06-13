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

// - Rimandato a App/Http/Controllers
Route::get('/', 'PageController@home')->name('index'); // - Percorso della home

Route::get('/', 'MovieController@list')->name('movies.index'); // - Percorso della della lista film

