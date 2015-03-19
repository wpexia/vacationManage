<?php

class VacationController extends BaseController {
	public function qingjia() {
		$dataFlag = 1;
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
		if($date < $employee->enterDate)
			return '{"result":"请假日期早于入职日期"}';
		if (!$employee || !$employee->status) {
			return '{"result":"没有这位在职员工"}';
		}
		$surplus = json_decode($employee->surplus, true);
		$year = explode('-', $date)[0];
		$month = explode('-', $date)[1];
		$days = $duration == 'all' ? 1 : 0.5;
		if (!isset($surplus[$year])) {
			$surplus[$year] = $employee->initSurplus(intval($year));
		}
		if (!isset($surplus[(String)(intval($year) - 1)])) {
			$surplus[(String)(intval($year) - 1)] = $employee->initSurplus(intval($year) - 1);
		}
		if($days>(float)($surplus[$year][$type])&&$dataFlag)$type = 'annual';
		if($month<7&&$type == 'sick'&&$dataFlag){
			if((float)($surplus[(String)(intval($year) - 1)]['sick'])<$days&&(float)($surplus[(String)(intval($year) - 1)]['annual']>0))
				$type = 'annual';
		}
		$bonus = 0;
		if ($month < 7) {
			if (isset($surplus[(String)(intval($year) - 1)])) {
				$bonus = max(0, min($days, (float)($surplus[(String)(intval($year) - 1)][$type])));
			}
		}


		$surplus[$year][$type] = (String)((float)($surplus[$year][$type]) - ($days - $bonus));
		$surplus[(String)(intval($year) - 1)][$type] = (String)((float)($surplus[(String)(intval($year) - 1)][$type]) - $bonus);

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

	public function vacation() {
		return View::make('vacation');
	}

	public function vacation_stat() {
		$year = Input::get('year');
		if (!in_array(Session::get('userEmail'),['huanglingjie@baixing.com','lihanyang@baixing.net']) ) {
			$employees = [Employee::getByEmail(Session::get('userEmail'))];
		} else {
			$employees = Employee::all();
		}
//		$employees = Employee::all();
		$tmp = array();
		foreach ($employees as $employee) {
			if ($employee == null) continue;
			$surplus = json_decode($employee->surplus, true);
			if (!isset($surplus[$year])) {
				$surplus[$year] = $employee->initSurplus(intval($year));
			}
			if (!isset($surplus[(String)(intval($year) - 1)])) {
				$surplus[(String)(intval($year) - 1)] = $employee->initSurplus(intval($year) - 1);
			}
			$tyear = $employee->initSurplus(intval($year));
			$lyear = $employee->initSurplus(intval($year) - 1);
			$tmp[$employee->userId] = array(
				'annual' => array(
					'normal_used' => (float)$tyear['annual'] - (float)$surplus[$year]['annual'],
					'bonus_used' => (float)$lyear['annual'] - (float)$surplus[(String)(intval($year) - 1)]['annual'],
					'normal_total' => (float)$tyear['annual'],
					'bonus_total' => (float)$lyear['annual'],
				),
				'sick' => array(
					'normal_used' => (float)$tyear['sick'] - (float)$surplus[$year]['sick'],
					'bonus_used' => (float)$lyear['sick'] - (float)$surplus[(String)(intval($year) - 1)]['sick'],
					'normal_total' => (float)$tyear['sick'],
					'bonus_total' => (float)$lyear['sick'],
				),
				'name' => $employee->name,
				'status' => $employee->status,
			);
		}
		$data = array(
			'result' => 'success',
			'data' => $tmp,
		);
		return json_encode($data);
	}

	public function vacation_stat_detail() {
		$userId = Input::get('eid');
		$startDate = Input::get('startDate');
		$endDate = Input::get('endDate');

		$vacations = Vacation::getByUserAndBeginEnd($userId, $startDate, $endDate);
		$data = '';
		foreach ($vacations as $vacation) {
			if ($data != '') $data .= ',';
			$tmp = array(
				'id' => $vacation['id'],
				'date' => $vacation['date'],
				'type' => $vacation['type'],
				'duration' => $vacation['duration'],
				'comment' => $vacation['comment'],
				'bonus' => $vacation['bonus'],
			);
			$data .= json_encode($tmp);
		}

		return '{"result":"success","data":[' . $data . ']}';
	}

	private function error($msssage) {
		$result = array(
			'result' => $msssage,
			'data' => [],
		);
		return json_encode($result);
	}

	public function xiaojia() {
		if (!in_array(Session::get('userEmail'),['huanglingjie@baixing.com', 'lihanyang@baixing.net','wangyuan@baixing.com',
			'zhouweiwei@baixing.net'])){
			return $this->error('不是管理员暂时还不能销假哦~');
		}
		$id = Input::get('id');
		try {
			$vacation = Vacation::findOrFail(intval($id));
		} catch (Exception $e) {
			return $this->error('销假错误');
		}
		$employee = Employee::getByUserId($vacation->userId);
		$days = $vacation->duration == 'all' ? 1 : 0.5;
		$bonus = $vacation->bonus;
		$surplus = json_decode($employee->surplus, true);
		$year = explode('-', $vacation->date)[0];
		$surplus[$year][$vacation->type] = (String)((float)$surplus[$year][$vacation->type] + $days - $bonus);
		$surplus[(String)(intval($year) - 1)][$vacation->type] = (String)((float)$surplus[(String)(intval($year) - 1)][$vacation->type] + $bonus);
		$employee->surplus = json_encode($surplus);
		$employee->save();
		$vacation->delete();
		$result = array(
			'result' => 'success',
			'data' => [],
		);
		return json_encode($result);
	}
}