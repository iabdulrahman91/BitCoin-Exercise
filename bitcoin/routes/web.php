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
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/price', 'PagesController@price');
Route::get('/price/{id}',['uses' => 'PagesController@price']);
Route::get('/allcoins', 'PagesController@allcoins');

Route::get('/add/{coin}', function($coin){
	$myid = Auth::user()->id;

	DB::table('coins')->insert(
    ['user_id' => $myid, 'coin_name' => $coin ,'created_at' => NOW(),'updated_at' => NOW()]
    );
    return view('pages.index');
	

});
//Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
