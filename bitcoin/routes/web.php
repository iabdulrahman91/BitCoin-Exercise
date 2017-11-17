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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/price', 'PagesController@price');
Route::get('/price/{id}',['uses' => 'PagesController@price']);

// Route::get('/price/{id}', function($id){
// 	$url = url("https://api.coinmarketcap.com/v1/ticker/".$id."/");
// 	dd($url);
// });
//Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
