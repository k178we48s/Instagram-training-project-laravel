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

Route::get('/', 'InstagramController@index');

Route::get('/search', 'InstagramController@search');

Route::get('/favourites', 'InstagramController@favourites');

Route::post('/add_to_favourites', 'InstagramController@addToFavourites');

Route::post('/delete_from_favourites', 'InstagramController@deleteFromFavourites');
