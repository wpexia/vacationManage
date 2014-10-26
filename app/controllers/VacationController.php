<?php

class VacationController extends BaseController {
	public function qingjia() {
		$userId = Input::get('eid');
		$date = Input::get('date');
		$duration = Input::get('duration');
		$type = Input::get('type');
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
		$days = $duration == 'all' ? 2 : 1;
		$bonus = 0;
		if ($month < 7) {
			if (isset($surplus[(String)(intval($year) - 1)])) {
				$bonus = min($days, intval($surplus[(String)(intval($year) - 1)][$type]));
			}
		}
		if (!isset($surplus[$year])) {
			$surplus[$year] = $employee->initSurplus(intval($year));
		}
		if (!isset($surplus[(String)(intval($year) - 1)])) {
			$surplus[(String)(intval($year) - 1)] = $employee->initSurplus(intval($year) - 1);
		}

		$surplus[$year][$type] = (String)(intval($surplus[$year][$type]) - ($days - $bonus));
		$surplus[(String)(intval($year) - 1)][$type] = (String)(intval($surplus[(String)(intval($year) - 1)][$type]) - $bonus);

		$employee->surplus = json_encode($surplus);
		$employee->save();

		$vacation = new Vacation();
		$vacation->userId = $userId;
		$vacation->date = $date;
		$vacation->type = $type;
		$vacation->duration = $duration;
		$vacation->comment = Input::get('comment');
		$vacation->bonus = $bonus;
		$vacation->save();

		return '{"result":"success","data":null}';
	}


}