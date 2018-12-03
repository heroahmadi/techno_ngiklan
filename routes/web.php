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
  Route::get('/', 'HomeController@index');
  Route::get('/chat', 'ChatsController@index');
  Route::get('/chat/fetch', 'ChatsController@fetchMessages');
  Route::post('/chat/send', 'ChatsController@sendMessage');

  Route::get('/search', 'SearchController@search');
  Route::get('/transaction/{endorser_id}', 'TransactionController@showEndorser');
  Route::post('/transaction/add', 'TransactionController@addTransaction');
});
// Auth::routes();

// endorser
// Route::get('/endorser',function(){
//   return view('userpage.endorser.home');
// });

Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'AdminController@index');
  Route::post('/transaction/approve', 'AdminController@approveTransaction');
});
