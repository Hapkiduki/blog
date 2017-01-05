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

//Rutas del Frontend
Route::get('/', ['as' => 'front.index',
	'uses' => 'FrontController@index'
]);

Route::get('tags/{name}', ['as' => 'front.search.tag',
	'uses' => 'FrontController@searchTag'
]);

Route::get('categories/{name}', ['as' => 'front.search.category',
	'uses' => 'FrontController@searchCategory'
]);

Route::get('articles/{slug}', ['as' => 'front.view.article',
	'uses' => 'FrontController@viewArticle'
]);



//rutas del panel de administración

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	//Rutas del Usuario

Route::get('/', ['as' => 'admin.index', function () {
    return view('admin.index');
}]);

Route::group(['middleware' =>  'admin'], function(){
	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy',[
	'uses' => 'UsersController@destroy', 
	'as' => 'admin.users.destroy'
	]);

	});



//Rutas de categorias
	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', ['uses' => 'categoriesController@destroy',
	'as' => 'admin.categories.destroy']);




//Rutas de tags
	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', ['uses' => 'TagsController@destroy',
	'as' => 'admin.tags.destroy']);

//Rutas de Articulos
	Route::resource('articles', 'ArticlesController');
	Route::get('articles/{id}/destroy', ['uses' => 'ArticlesController@destroy',
	'as' => 'admin.articles.destroy']);

	Route::get('images', ['uses' => 'ImagesController@index',
	'as' => 'admin.images.index']);

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


	