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
    'uses' => 'HomeController@index']);

get('add-user','UserController@getAddUser');
post('add-user','UserController@postAddUser');

//get('edit-user/{id}',function($id){
//    echo $id;
//});
get('edit-user/{id}','UserController@getEditUser');

post('edit-user','UserController@postEditUser');
//post('edit-user/{id}','UserController@postEditUser');

get('login',['as' => 'login',
            'uses' => 'Auth\AuthController@getLogin']);

post('login','Auth\AuthController@postLogin');


get('logout','Auth\AuthController@getLogout');

get('list-user','HomeController@index');
//Route::group('user', [
//    'as'    => 'user::',
//
//]);