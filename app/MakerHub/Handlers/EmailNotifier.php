<?php namespace MakerHub\Handlers;

use MakerHub\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventListener;
use MakerHub\Mailers\UserMailer;

/**
*
*/
class EmailNotifier extends EventListener
{
	function __construct(UserMailer $mailer) {
		$this->mailer = $mailer;
	}
	
	public function whenUserHasRegistered(UserRegistered $event)
	{
		$this->mailer->sendWelcomeMessageTo($event->user);
	}
}