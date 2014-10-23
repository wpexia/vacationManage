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


}