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

Route::group(array('before' => 'login'), function () {
	Route::get('/', 'EmployeeController@index');

	Route::get('forget', function () {
		Session::flush();
		return "reset all session!";
	});
	Route::get('logout', function () {
		Session::forget('userEnmail');
		Return Redirect::to('http://www.baixing.com');
	});
	Route::get('test', function () {
		$all = Employee::All();

		return '';
	});
});

Route::get('login', 'GoogleController@index');
Route::get('auth2', 'GoogleController@get');