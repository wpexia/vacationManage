<?php

class Vacation extends Eloquent {

	protected $table = 'vacation';

	protected $fillable = array(
		'userId',
		'date',
		'type',
		'duration',
		'comment',
	);

	public static function getByUserIdAndDate($userId, $date) {
		try{
			$model = Vacation::where('userId','=',$userId,)
		}
	}

}