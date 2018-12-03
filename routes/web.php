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

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login')->name('logmein');
Route::get('/register', 'RegisterController@index')->name('register');

Route::group(['middleware' => 'auth'], function(){
  Route::get('/home', 'HomeController@index');
});
// Auth::routes();

// endorser
// Route::get('/endorser',function(){
//   return view('userpage.endorser.home');
// });

Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'AdminController@index');
});

Route::group(['middleware' => 'auth'], function(){
  Route::get('/profile/{id}', ['as' => 'userpage.pages.profile', 'uses' => 'ProfilController@index']);
  Route::post('/profile/{id}/produk', 'ProfilController@store')->name('produk.store');
});