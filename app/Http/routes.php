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

//Existen rutas de tipo GET, PUT, POST, DELETE, RESORCE

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	//Rutas del Usuario
	Route::resource('users', 'UsersController');



//Rutas de categorias
	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', ['uses' => 'categoriesController@destroy',
	'as' => 'admin.categories.destroy']);

});

Route::get('admin/auth/login', [
	'uses' => 'Auth\AuthController@getLogin',
	'as' => 'admin.auth.login'
	]);

Route::post('admin/auth/login', [
	'uses' => 'Auth\AuthController@postLogin',
	'as' => 'admin.auth.login'
	]);

Route::get('admin/auth/logout', [
	'uses' => 'Auth\AuthController@getLogout',
	'as' => 'admin.auth.logout'
	]);


	