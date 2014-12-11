<?php

class Employee extends Eloquent
{

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

	/**
	 * @param string $name
	 * @return Employee
	 * @static
	 */
	public static function getByName($name)
	{
		if ($name == null) {
			return null;
		}
		try {
			$model = Employee::where('name', '=', $name)->firstOrFail();
		} catch (Exception $e) {
			return null;
		}
		return $model;
	}

	public function toArray()
	{
		return ['userId' => $this->userId, 'name' => $this->name, 'department' => $this->department, 'enterDate' => $this->enterDate, 'email' => $this->email];
	}

	/**
	 * @param string $userId
	 * @return Employee
	 * @static
	 */
	public static function getByUserId($userId)
	{
		if ($userId == null) {
			return null;
		}
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
	public function initSurplus($year)
	{
		$days = [0, 0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
		if ($year < intval(explode('-', $this->enterDate)[0])) {
			return ['annual' => '0', 'sick' => '0'];
		}
		if ($year == intval(explode('-', $this->enterDate)[0])) {
			$day = $days[intval(explode('-', $this->enterDate)[1])] + intval(explode('-', $this->enterDate)[2]);
			return ['annual' => (string)((floor((365 - $day) * 30 / 365)) / 2.0 - (floor((365 - $day) * 10 / 365)) / 2.0), 'sick' => (string)((floor((365 - $day) * 10 / 365)) / 2.0)];
		}
		$day = 10;
		$day = min(15, $day + $year - intval(explode('-', $this->enterDate)[0]));
		return ['annual' => (String)$day, 'sick' => '5'];
	}

	/**
	 * @param String $email
	 * @return Employee
	 */
	public static function getByEmail($email)
	{
		if ($email == null)
			return null;
		try {
			$model = Employee::where('email', '=', $email)->firstOrFail();
		} catch (Exception $e) {
			return null;
		}
		return $model;
	}
}
