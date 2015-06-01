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


Route::get('createuser', function() 
{
	return "Url createuser";
});

Route::get('updateuser/{user_id}', function($user_id)
{
	return "Url updateuser, param: " . $user_id;
});

Route::get('userdetail/{user_id}', function($user_id)
{
	return "Url userdetail, param: " .$user_id;
});

Route::get('user/{user_id}/createcontact', function($user_id)
{
	return "Url user/{user_id}/createcontact, param: " $user_id;
});

Route::get('user/{user_id}/updatecontact/{contact_id}', function($user_id, $contact_id)
{
	return "Url user/{user_id}/updatecontact/{contact_id}, params: " . $user_id . ", " . $contact_id;
});

Route::get('user/{user_id}/deletecontact/{contact_id}' function($user_id, $contact_id)
{
	return "Url user/{user_id}/deletecontact/{contact_id}, params: " . $user_id . ", " . $contact_id;
});

Route::get('user/{user_id}/contactlist', function($user_id)
{
	return "Url user/{user_id}/contactlist, param: " . $user_id;
});

Route::get('user/{user_id}/contactdetail/{contact_id}', function($contact_id)
{
	return "Url user/{user_id}/contactdetail/{contact_id}, param: " . $contact_id;
});