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

//Route::method('url', ['as' => 'named route', 'uses' => '\ControllerName@methodName']);

//Aauthentication

Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

//Registration

Route::get('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Pasword reset

Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');

/*RESOURCES*/

//Posts
Route::resource('posts', 'PostController');

//Categories
// 'except' => ['create'] - don't create 'create' route for resource
//create new categories in the index method  
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

//Tags
//'except' => ['create'] - don't create 'create' route for resource
//create new tags in the index method  
Route::resource('tags', 'TagController', ['except' => ['create']]);

/*End of RESOURCES*/

//Comments
Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);

//Pages

//get method with {slug} variable
//public one post view selected by slag with regular expressions
Route::get('blog/{slug}', ['as' =>'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
//public list of wiev
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' =>  'blog.index']);

Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');

//index
Route::get('/', 'PagesController@getIndex');

