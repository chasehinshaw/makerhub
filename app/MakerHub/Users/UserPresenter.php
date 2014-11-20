<?php namespace MakerHub\Users;
use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter 
{
	/**
	 * Display the user profile img from gravatar
	 *
	 * @param int $size 
	 * @return url 
	 */
  public function gravatar($size = 24)
  {
  	$email = md5($this->email);
  	return "//www.gravatar.com/avatar/{$email}?s={$size}";
  }

  /**
   * Get the number of subscribers
   * @return mixed
   */
  public function subscriberCount()
  {
  	$count = $this->entity->subscribers()->count();
  	$plural = str_plural('Follower', $count);

  	return "$count . $plural";
  }

  public function ideaCount()
  {
  	$count = $this->entity->ideas()->count();
  	$plural = str_plural('Idea', $count);

  	return "$count . $plural";
  }
  
}