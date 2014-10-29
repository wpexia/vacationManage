<?php

class Vacation extends Eloquent {

	protected $table = 'vacation';

	protected $fillable = array(
		'userId',
		'date',
		'type',
		'duration',
		'comment',
		'bonus',
	);

	/**
	 * @param int $userId
	 * @param String $date
	 * @return Vacation
	 */
	public static function getByUserIdAndDate($userId, $date) {
		try {
			$model = Vacation::where('userId', '=', $userId)->where('date', '=', $date);
			$model = $model->firstOrFail();
		} catch (Exception $e) {
			return null;
		}
		return $model;
	}


	public function scopeYear($query, $begin, $end){
		return $query->where('date','>=',$begin)->where('date','<=', $end);
	}

	/**
	 * @param $userId
	 * @param $year
	 * @return array
	 */
	public static function getByuserAndYear($userId, $year) {
		$model = Vacation::where('userId','=',$userId)->Year((String)$year.'-01-01',(String)$year.'-12-31');
		return $model->get()->toArray();
	}

	/**
	 * @param $userId
	 * @param $begin
	 * @param $end
	 * @return array
	 */
	public static function getByUserAndBeginEnd($userId,$begin,$end) {
		$model = Vacation::where('userId','=',$userId)->Year($begin,$end);
		return $model->get()->toArray();
	}
}