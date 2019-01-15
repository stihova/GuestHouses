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

Auth::routes();

Route::resource('/houses', 'HouseController');
Route::resource('/locations', 'LocationController');
Route::resource('/types', 'TypeController');

Route::resource('/images','ImageController');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('houses.search','SearchController@searchHouses');
Route::post('locations.search','SearchController@searchLocations');
Route::post('types.search','SearchController@searchTypes');


