<?php

class Employee extends Eloquent {

	protected $table = 'employee';

	protected $fillable = array('userId', 'name', 'email', 'enterDate', 'status', 'surplus', 'dapartment');

	public function findByName($name) {

	}

	public function toArray() {
		return ['userId' => $this->userId, 'name' => $this->name, 'department' => $this->dapartment, 'enterDate' => $this->enterDate];
	}
}