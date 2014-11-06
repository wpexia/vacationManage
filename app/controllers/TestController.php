<?php

class TestController extends BaseController {
	public function clear() {
		$data = array(

		);
		foreach ($data as $em) {
			$employee = Employee::getByName($em['name']);
			if(!$employee)
				continue;
			$surplus['2014'] = $employee->initSurplus(2014);
			$days = (float)$em['day'];

			if ($days >= (float)$surplus['2014']['annual'] + (float)$surplus['2014']['sick']) {
				$surplus['2013'] = ['annual' => (String)($days - ((float)$surplus['2014']['annual'] + (float)$surplus['2014']['sick'])), 'sick' => '0'];
				$employee->surplus = json_encode($surplus);
				$employee->save();
				continue;
			}
			if ($days >= (float)$surplus['2014']['annual']) {
				$surplus['2013'] = ['annual' => '0', 'sick' => '0'];
				$surplus['2014']['sick'] = (String)($days -(float)$surplus['2014']['annual']);
				$employee->surplus = json_encode($surplus);
				$employee->save();
				continue;
			}
			$surplus['2013'] = ['annual' => '0', 'sick' => '0'];
			$surplus['2014']['annual'] = (String)$days;
			$surplus['2014']['sick'] = '0';
			$employee->surplus = json_encode($surplus);
			$employee->save();
		}
	}
}