 <?php

/*
	Eloquent ORM
	Easch class will return one record/object on request
*/
class Therapist  extends Eloquent {


	protected $fillable = array('id','name','phone','email','username','password','created_at','updated_at');

	public function __construct() {
		// you can assign any default values for a new Therapist here in the constructor
		// $this->email="something@somewhere.com";
	}	

	public function clients() {
		return $this->hasMany('Client','therapist_id');
	}

	public function appts() {
		return $this->hasMany('Appt','therapist_id');
	}

}
