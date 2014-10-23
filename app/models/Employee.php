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

	public function initSurplus($year) {
		$days = [0,0,31,59,90,120,151,181,212,243,273,304,334];
		if($year == intval(explode('-',$this->enterDate)[0])){
			$day = $days[intval(explode('-',$this->enterDate)[2])]+intval(explode('-',$this->enterDate)[3]);
			return round($day*20/365)/2;
		}

	}
}
