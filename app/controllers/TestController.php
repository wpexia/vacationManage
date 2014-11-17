<?php

class TestController extends BaseController {
	public function clear() {
		$data = array(
			['name' => '王建硕', 'day' => '27.0'],
			['name' => '张婷婷', 'day' => '24.5'],
			['name' => '潘晓良', 'day' => '17.0'],
			['name' => '梁溢', 'day' => '22.0'],
			['name' => '虞冰', 'day' => '23.0'],
			['name' => '高奕峰', 'day' => '18.0'],
			['name' => '罗颖', 'day' => '20.0'],
			['name' => '何颖', 'day' => '15.0'],
			['name' => '刘泉', 'day' => '11.0'],
			['name' => '姜丰波', 'day' => '18.5'],
			['name' => '孙登甲', 'day' => '20.5'],
			['name' => '韩时佳', 'day' => '24.0'],
			['name' => '谭嘉明', 'day' => '15.5'],
			['name' => '同欢', 'day' => '15.5'],
			['name' => '王彦华', 'day' => '11.5'],
			['name' => '韦祎奂', 'day' => '12.5'],
			['name' => '赵征宇', 'day' => '15.0'],
			['name' => '沈洁琼', 'day' => '15.0'],
			['name' => '顾立维', 'day' => '13.0'],
			['name' => '张平', 'day' => '12.5'],
			['name' => '于博', 'day' => '12.4'],
			['name' => '彭思萌', 'day' => '11.4'],
			['name' => '朱永亮', 'day' => '11.0'],
			['name' => '季寅健', 'day' => '23.0'],
			['name' => '徐雪', 'day' => '19.0'],
			['name' => '李广彦', 'day' => '26.0'],
			['name' => '高明', 'day' => '23.0'],
			['name' => '张新雪', 'day' => '15.5'],
			['name' => '孙敏', 'day' => '18.5'],
			['name' => '诸德超', 'day' => '15.0'],
			['name' => '刘丹妮', 'day' => '12.5'],
			['name' => '王卫华', 'day' => '17.0'],
			['name' => '潘捷', 'day' => '20.0'],
			['name' => '梁宏昊', 'day' => '28.5'],
			['name' => '曹飞', 'day' => '33.0'],
			['name' => '周翔', 'day' => '12.5'],
			['name' => '须孟一', 'day' => '17.0'],
			['name' => '贺师俊', 'day' => '8.5'],
			['name' => '张林', 'day' => '12.0'],
			['name' => '张伟', 'day' => '21.0'],
			['name' => '杨敏达', 'day' => '-4.0'],
			['name' => '朱骏', 'day' => '23.5'],
			['name' => '丁桂涛', 'day' => '17.5'],
			['name' => '程畅畅', 'day' => '13.0'],
			['name' => '朱秋翾', 'day' => '19.0'],
			['name' => '陈凯斐', 'day' => '11.5'],
			['name' => '倪敏杰', 'day' => '14.0'],
			['name' => '郭嘉', 'day' => '14.0'],
			['name' => '徐雁斐', 'day' => '13.0'],
			['name' => '张鹏', 'day' => '12.5'],
			['name' => '尹川', 'day' => '15.0'],
			['name' => '翟冰洁', 'day' => '18.0'],
			['name' => '王冠立', 'day' => '13.5'],
			['name' => '常楚白', 'day' => '8.5'],
			['name' => '许耀升', 'day' => '11.0'],
			['name' => '王强', 'day' => '13.0'],
			['name' => '任剑钢', 'day' => '13.0'],
			['name' => '李思锐', 'day' => '12.0'],
			['name' => '刘杰', 'day' => '8.0'],
			['name' => '张明卿', 'day' => '13.0'],
			['name' => '张翼飞', 'day' => '12.5'],
			['name' => '齐艳梅', 'day' => '17.5'],
			['name' => '孙蕤', 'day' => '15.5'],
			['name' => '仇雯晶', 'day' => '16.0'],
			['name' => '黄凌洁', 'day' => '11.5'],
			['name' => '赵路', 'day' => '11.0'],
			['name' => '胡洪伟', 'day' => '12.5'],
			['name' => '吴佩华', 'day' => '12.5'],
			['name' => '葛颖', 'day' => '31.5'],
			['name' => '李苏晋', 'day' => '20.0'],
			['name' => '杨芳', 'day' => '19.5'],
			['name' => '吴昊', 'day' => '15.0'],
			['name' => '王中杰', 'day' => '13.0'],
			['name' => '蒋宛霖', 'day' => '12.5'],
			['name' => '夏冬青', 'day' => '12.0'],
			['name' => '梁燕', 'day' => '11.0'],
			['name' => '贾幸', 'day' => '11.0'],
			['name' => '彭辉', 'day' => '33.0'],
			['name' => '余永凯', 'day' => '13.0'],
			['name' => '夏志迪', 'day' => '11.5'],
			['name' => '赵润', 'day' => '32.5'],
			['name' => '杨玮玮', 'day' => '21.0'],
			['name' => '叶楠', 'day' => '12.5'],
			['name' => '贺涛', 'day' => '14.5'],
			['name' => '叶婵', 'day' => '18.5'],
			['name' => '孙甜', 'day' => '7.0'],
			['name' => '甘婷', 'day' => '15.5'],
			['name' => '史祺', 'day' => '15.5'],
			['name' => '杜波涛', 'day' => '12.0'],
			['name' => '凌霄鸿', 'day' => '12.5'],
			['name' => '李潇琳', 'day' => '11.5'],
			['name' => '华清怡', 'day' => '29.0'],
			['name' => '徐玉苏', 'day' => '9.5'],
			['name' => '张敏华', 'day' => '15.0'],
			['name' => '徐钰炜', 'day' => '15.0'],
			['name' => '凌竹馨', 'day' => '7.5'],
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