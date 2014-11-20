<?php namespace MakerHub\Users;

trait SubscriberTrait
{

	/**
	* Get the list of the users that the current user follows.
	*
	* @return mixed
	*/
	public function subscribedUsers()
	{
	return $this->belongsToMany(static::class, 'subscriptions', 'follower_id', 'followed_id')
		->withTimestamps();
	}

	 /**
   * Get the list of users that the current user follows
   * 
   * @return mixed
   */
  public function subscribes()
  {
  	return $this->belongsToMany('MakerHub\Users\User', 'subscriptions', 'follower_id', 'followed_id')
  		->withTimestamps();
  }

  /**
   * Get the list of users that follow the current user
   * 
   * @return mixed
   */
  public function subscribers()
  {
  	return $this->belongsToMany('MakerHub\Users\User', 'subscriptions', 'followed_id', 'follower_id')
  		->withTimestamps();
  }

  /**
   * Check if current user follows another user
   * 
   * @param  User    $otherUser [description]
   * @return boolean            [description]
   */
  public function isFollowedBy(User $otherUser)
  {
  	$idsWhoOtherUserFollows = $otherUser->subscribes()
  		->lists('followed_id');

  	return in_array($this->id, $idsWhoOtherUserFollows);
  }
}