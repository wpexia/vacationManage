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
	Route::get('vacation_stat', 'VacationController@vacation_stat');
	Route::get('vacation_stat_detail', 'VacationController@vacation_stat_detail');
	Route::get('xiaojia', 'VacationController@xiaojia');
});
Route::group(array('before' => 'superman'), function () {
	Route::get('employee', 'EmployeeController@selectAction');
	Route::get('qingjia', 'VacationController@qingjia');
	Route::get('clear', 'TestController@clear');
});
Route::get('error',function(){
	Session::flush();
	Return "请使用baixing.com邮箱登陆";
});


Route::get('login', 'GoogleController@index');
Route::get('auth2', 'GoogleController@get');
Route::get('test',function(){
	return View::make('test');
});