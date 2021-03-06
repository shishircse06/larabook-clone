<?php namespace Larabook\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent,Hash;
use Larabook\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventGenerator;


/**
 * Class User
 * @package Larabook\Users
 */
class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait,EventGenerator;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $presenter = 'Larabook\Users\UserPresenter';
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
		$user->raise(new UserRegistered($user));
		return $user;

		//raise an event here

	}


	/**
	 * user can have many statuses
	 * @return mixed
     */
	public function statuses(){
		return $this->hasMany('Larabook\Statuses\Status');
	}

	public function gravatarLink(){

		$email = md5($this->email);
		return "//www.gravatar.com/avatar/{$email}?s=30";
	}

}
