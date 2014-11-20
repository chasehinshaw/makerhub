<?php namespace MakerHub\Registration\Events;

use MakerHub\Users\User;

/**
* This is used to trigger events after a user signs up.
* i.e. Notifiy admin, Email new user
*
*
*/
class UserRegistered
{
	public $user;

	function __construct(User $user)
	{
		$this->user = $user;
	}
}