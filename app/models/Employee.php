<?php

class Employee extends Eloquent {

	protected $table = 'employee';

	protected $fillable = array(
		'userId',
		'name',
		'email',
		'enterDate',
		'status',
		'surplus',
		'department',
		'leaveDate'
	);

	public function getByName($name) {

	}

	public function toArray() {
		return ['userId' => $this->userId, 'name' => $this->name, 'department' => $this->department, 'enterDate' => $this->enterDate];
	}

	public static function getByUserId($userId) {
		try {
			$model = Employee::where('userId', '=', $userId)->firstOrFail();
		} catch (Exception $e) {
			return null;
		}
		return $model;
	}
}
