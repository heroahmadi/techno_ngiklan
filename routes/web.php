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

Route::get('/', 'HomeController@index');
Route::get('/login', 'LoginController@index')->name('login');
Route::get('/register', 'RegisterController@index')->name('register');
// Auth::routes();

// endorser
// Route::get('/endorser',function(){
//   return view('userpage.endorser.home');
// });

Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'AdminController@index');
});
