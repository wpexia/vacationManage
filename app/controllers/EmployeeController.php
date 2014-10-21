<?php

class EmployeeController extends BaseController {

	public function index() {
		$params = $this->params();
		return View::make('employee', array('data' => $params));
	}

	private function params() {
		$employees = Employee::all()->all();
		$params = [];
		foreach ($employees as $employee) {
			array_push($params, $employee->toArray());
		}
		return $params;
	}
}