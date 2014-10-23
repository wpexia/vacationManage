<?php

class VacationCtoller {
	public function index() {
		$userId = Input::get('eid');
		$date = Input::get('date');
		$duration = Input::get('duration');
		$vacation = Vacation::getByUserIdAndDate($userId, $date);
		if ($vacation) {
			if ($vacation->duration == 'all'
				|| $duration == 'all'
				|| $vacation->duration == Input::get('duration')
			) {
				return '{"result":"这个时间段已经请过假"}';
			}
		}
		$employee = Employee::getByUserId($userId);
		if (!$employee || $employee->status) {
			return '{"result":"没有这位在职员工"}';
		}
		$surplus = json_decode($employee->surplus, true);
		$year = explode('-', $date)[0];
		$month = explode('-', $date)[1];
		$bonus = 0;
		if ($month < 7) {
			if (isset($surplus[(String)(intval($year) - 1)])) {
				$bonus = max($duration == 'all' ? 1 : 0.5, $surplus[(String)(intval($year) - 1)]);
			}
		}
		if(!isset($surplus[$year])){
			$surplus[$year] =
		}
	}
}