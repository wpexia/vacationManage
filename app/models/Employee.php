<?php

class Employee extends Eloquent {

	protected $table = 'employee';

	protected $fillable = array('userId','name','email','enterDate','status','surplus');

}