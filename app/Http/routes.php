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


//add extra extension to render pure html alongside with php
View::addExtension('html', 'php');

Route::get('/blog', function() {
	return view('Blog');
});
//route for inserting
Route::post('/tweets/create', 'BlogController@create');
//route for deleting
Route::post('/tweets/delete', 'BlogController@delete');
//route for updating
Route::post('/tweets/edit', 'BlogController@edit');
//route for retrieving all
Route::get('/tweets/all', 'BlogController@getall');