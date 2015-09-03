<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('login',function(){
//   return view('login');
//});

Route::get('list-users',function(){
    return view('user.list-users');
});

Route::get('list-products',function(){
    return view('product.list-products');
});

Route::get('/s/u/list-categories',function(){
    return view('category.list-categories');
});

Route::get('login','Auth\AuthController@getLogin');

Route::post('user/login','Auth\AuthController@postLogin');

Route::get('user/logout','Auth\AuthController@getLogout');

Route::get('Wrong',function(){
    return 'Wrong';
});
