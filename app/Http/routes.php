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

get('home',[
    'as' => 'home',
    'uses' => 'UserController@index']);

get('add-user','UserController@getAddUser');
post('add-user','UserController@postAddUser');



get('edit-user/{id}/{page}','UserController@getEditUser');

post('edit-user/{id}/{page}','UserController@postEditUser');



get('edit-user/{id}/{page}','UserController@getEditUser');
post('edit-user/{id}/{page}','UserController@postEditUser');

post('user/{page}','UserController@deleteOrActivate');

post('search-user','UserController@searchUser');
get('login',['as' => 'login',
            'uses' => 'Auth\AuthController@getLogin']);
post('login','Auth\AuthController@postLogin');


get('logout','Auth\AuthController@getLogout');

get('list-user',['as' => 'list-user',
                 'uses' => 'HomeController@index']);


//Route::group('user', [
//    'as'    => 'user::',
//
//]);