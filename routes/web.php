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

Route::get('/', 'WelcomeController@index');

Route::get('/category', function() {
    return view('category.index');
});

Route::get('/brand', function() {
    return view('brand.index');
});

//SignupControllerのroute
Route::get('/signup', 'SignupController@index');

Route::get('/signup/registration', 'SignupController@registration');

Route::get('/signup/payment_method', 'SignupController@payment_method_get');
Route::post('/signup/payment_method', 'SignupController@payment_method');

Route::post('/signup/confirm', 'SignupController@confirm');

Route::get('/signup/complete', 'SignupController@complete');


Route::get('/login_auth', 'LoginController@index')->name('login_auth');
Route::post('/login_auth', 'LoginController@post')->name('login_auth');

Route::get('/mypage', 'MypageController@index')->name('mypage');

Route::get('/sell', 'SellController@index')->name('sell');
Route::post('/sell', 'SellController@store')->name('sell');

Route::get('/purchase/{product}', 'PurchaseController@index');
Route::post('/puchase/complete', 'PurchaseController@store')->name('purchase.complete');

Route::get('/{product}', 'WelcomeController@show');

Route::get('/user/{user}', 'UserController@show')->name('user.user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
