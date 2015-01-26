<?php namespace Larabook\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent,Hash;

/**
 * Class User
 * @package Larabook\Users
 */
class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $fillable=['username','email','password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	//password hashing function
	public function setPasswordAttribute($password){
		$this->attributes['password']=Hash::make($password);

	}

	public static function register($username,$email,$password){
		$user=new static(compact('username','email','password'));
		return $user;

		//raise an event here

	}

}
