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
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::post('/login', 'LoginController@login')->name('logmein');
Route::get('/register', 'RegisterController@index')->name('register');
Route::post('/register', 'RegisterController@register');
Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function(){

  Route::get('/profile/{id?}', ['as' => 'userpage.pages.profile', 'uses' => 'ProfilController@index']);
  Route::post('/profile/{id}/produk', 'ProfilController@store')->name('produk.store');
  
  Route::get('/chat', 'ChatsController@index');
  Route::get('/chat/fetch', 'ChatsController@fetchMessages');
  Route::post('/chat/send', 'ChatsController@sendMessage');
  
  Route::get('/search', 'SearchController@search');
  Route::get('/transaction/my', 'TransactionController@myTransactions');
  Route::post('/transaction/review', 'TransactionController@review');
  Route::get('/transaction/{endorser_id}', 'TransactionController@showEndorser');
  Route::post('/transaction/offer', 'TransactionController@tawarkan');
  Route::post('/transaction/add', 'TransactionController@addTransaction');
  
  Route::get('/coins', 'CoinController@index');
  Route::get('/coins/buy/{id}', 'CoinController@buy');
  Route::post('/coins/buy', 'CoinController@pay');

  Route::get('/product/{id}', 'ProductController@index');
});
// Auth::routes();

// endorser
// Route::get('/endorser',function(){
//   return view('userpage.endorser.home');
// });

Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'AdminController@index');
  Route::get('/coins', 'AdminController@coins');
  Route::post('/coins/approve', 'AdminController@approveCoins');
  Route::post('/transaction/approve', 'AdminController@approveTransaction');
});