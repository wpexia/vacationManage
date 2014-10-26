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

	public static function getByUserIdAndDate($userId, $date) {
		try {
			$model = Vacation::where('userId', '=', $userId)->where('date', '=', $date);
			$model = $model->firstOrFail();
		} catch (Exception $e) {
			return null;
		}
		return $model;
	}
}