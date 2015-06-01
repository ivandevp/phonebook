<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('createuser', 'UserController@createuser');

Route::get('updateuser/{user_id}', 'UserController@updateuser');

Route::get('userdetail/{user_id}', 'UserController@userdetail');

Route::get('user/{user_id}/createcontact', 'ContactController@createcontact');

Route::get('user/{user_id}/updatecontact/{contact_id}', 'ContactController@updatecontact');

Route::get('user/{user_id}/deletecontact/{contact_id}' 'ContactController@deletecontact');

Route::get('user/{user_id}/contactlist', 'ContactController@contactlist');

Route::get('user/{user_id}/contactdetail/{contact_id}', 'ContactController@contactdetail');