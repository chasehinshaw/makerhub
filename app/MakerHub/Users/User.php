<?php namespace MakerHub\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

use Eloquent, Hash;

use MakerHub\Registration\Events\UserRegistered;
use MakerHub\Users\SubscriberTrait;

use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;



class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, EventGenerator, PresentableTrait, SubscriberTrait;


	/**
	 * Which fields can be Mass Assigned?
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * Path to the 'view' presenter for the user.
	 * 
	 * @var $presenter
	 */
	protected $presenter = 'MakerHub\Users\UserPresenter';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 */
	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = Hash::make($password);
	}


	/**
	 * Register a new user
	 *
	 * @param $username
	 * @param $email
	 * @param $password 
	 * @return static
	 */
	public static function register($username, $email, $password)
	{
		$user = new static( compact('username', 'email', 'password') );

		// Raise an event
		$user->raise(new UserRegistered($user));

		return $user;
	}


	/**
	 * A user has many Ideas!
	 * 
	 * @return mixed
	 */
  public function ideas()
  {
  	return $this->hasMany('MakerHub\Ideas\Idea')->latest();
  }
  
  /**
   * Those Ideas have many Comments!
   * 
   * @return mixed
   */
  public function ideaComments()
  {
  	return $this->hasMany('MakerHub\Ideas\IdeaComment');
  }

  /**
   * Determine if the given user is the same
   * as the curent one 
   * 
   * @param  User $user 
   * @return boolean      
   */
  public function is($user)
  {
  	if ( is_null($user) ) return false;

  	return $this->username == $user->username;
  }



  // public function subscribe()
  // {
  // 	return $this->follows()->attach( $userIdToFollow );
  // }
}
