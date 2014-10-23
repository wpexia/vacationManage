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
		$array = [
			'result' => 'success',
			'data' => [
				'eid' => '1',
				'name' => '王建硕',
				"department" => "管理部",
				"enterDate" => "2005-03-01",
				"status" => 1
			]
		];
		$json = '{"result":"success","data":{"id":"emp:542261c29c22eec1378b459e","eid":1,"name":"王建硕","department":"管理部","enterDate":"2005-03-01","status":1,"interval":[],"modifiedTime":1411539394,"createdTime":1411539394}}';
		return json_encode($array, JSON_UNESCAPED_UNICODE);
	});

	Route::get('employee', 'EmployeeController@selectAction');

	Route::get('qingjia', 'EmployeeController@index');
});

Route::get('login', 'GoogleController@index');
Route::get('auth2', 'GoogleController@get');