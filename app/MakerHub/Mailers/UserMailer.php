<?php namespace MakerHub\Mailers;

use Illuminate\Mail\Mailer as Mail;
use MakerHub\Users\User;

/**
* 
*/
class UserMailer extends Mailer
{
	public function sendWelcomeMessageTo(User $user)
	{
		$subject = 'Welcome to MakerHub';
		$view = 'email.registration.confirm';

		$this-sendTo($user, $subject, $view);
	}
	
}

