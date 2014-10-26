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

	/**
	 * @param string $userId
	 * @return Employee
	 * @static
	 */
	public static function getByUserId($userId) {
		try {
			$model = Employee::where('userId', '=', $userId)->firstOrFail();
		} catch (Exception $e) {
			return null;
		}
		return $model;
	}

	/**
	 * @param int $year
	 * @return array
	 */
	public function initSurplus($year) {
		$days = [0,0,31,59,90,120,151,181,212,243,273,304,334];
		if($year < intval(explode('-',$this->enterDate)[0])){
			return ['annual'=>'0','sick'=>'0'];
		}
		if($year == intval(explode('-',$this->enterDate)[0])){
			$day = $days[intval(explode('-',$this->enterDate)[1])]+intval(explode('-',$this->enterDate)[2]);
			return ['annual'=>(string)(round($day*20/365)),'sick'=>(string)(round($day*10/365))];
		}
		$day = 10;
		$day = min(15,$day+intval(date('Y'))-$year);
		return ['annual'=>(string)$day,'sick'=>'10'];
	}
}
