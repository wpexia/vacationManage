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
	Route::get('/', 'VacationController@vacation');

	Route::get('forget', function () {
		Session::flush();
		return "reset all session!";
	});
	Route::get('logout', function () {
		Session::forget('userEnmail');
		Return Redirect::to('http://www.baixing.com');
	});
	Route::get('test', function () {
		var_dump(((string)(round((365 - 273) * 20 / 365) /2)));
		return " a";
	});
	Route::get('employee', 'EmployeeController@selectAction');
	Route::get('vacation', 'VacationController@vacation');
	Route::get('qingjia', 'VacationController@qingjia');
	Route::get('vacation_stat', 'VacationController@vacation_stat');
	Route::get('vacation_stat_detail','VacationController@vacation_stat_detail');
	Route::get('xiaojia','VacationController@xiaojia');
});
Route::get('login', 'GoogleController@index');
Route::get('auth2', 'GoogleController@get');