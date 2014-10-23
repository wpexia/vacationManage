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

	public function selectAction() {
		return call_user_func('self::' . Input::get('operation'));
	}

	public function update() {
		$userId = Input::get('eid');
		$employee = Employee::getByUserId($userId);
		$employee->name = Input::get('name');
		$employee->department = Input::get('department');
		$employee->enterDate = Input::get('date');
		$employee->save();

		$array = [
			'result' => 'success',
			'data' => [
				'eid' => $employee->userId,
				'name' => $employee->name,
				"department" => $employee->department,
				"enterDate" => $employee->enterDate,
				"status" => $employee->status,
			]
		];

		return json_encode($array, JSON_UNESCAPED_UNICODE);
	}

	public function enter() {
		$userId = Input::get('eid');
		$employee = Employee::getByUserId($userId);
		if ($employee != null) {
			if ($employee->status != 0) {
				return '{"result":"已经入职"}';
			}
		} else {
			$employee = new Employee();
		}
		$employee->userId = Input::get('eid');
		$employee->name = Input::get('name');
		$employee->department = Input::get('department');
		$employee->enterDate = Input::get('date');
		$employee->status = 1;
		$employee->save();

		$array = [
			'result' => 'success',
			'data' => [
				'eid' => $employee->userId,
				'name' => $employee->name,
				"department" => $employee->department,
				"enterDate" => $employee->enterDate,
				"status" => $employee->status,
			]
		];

		return json_encode($array, JSON_UNESCAPED_UNICODE);
	}

	public function leave() {
		$userId = Input::get('eid');
		$employee = Employee::getByUserId($userId);
		if ($employee == null || $employee->status == 0) {
			return '{"result":"删除失败"}';
		}
		$employee->status = 0;
		$employee->leaveDate = Input::get('leaveDate');
		$employee->save();

		return '{"result":"success","data":null}';
	}
}