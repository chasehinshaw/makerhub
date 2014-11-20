<?php namespace MakerHub\Users;

class UserRepository {

	/**
	 * Persist a user
	 *
	 * @param User $user
	 * @return mixed 
	 **/
	public function save(User $user)
	{
		return $user->save();
	}


	/**
	 * Get a paginated list of all users
	 * 
	 * @param  integer $howMany 
	 * @return mixed
	 */
	public function getPaginated($howMany = 25)
	{
		return User::orderBy('username', 'asc')->simplePaginate($howMany);
	}


	/**
	 * Pull specific user from database
	 * 
	 * @param  $username 
	 * @return mixed
	 */
	public function findByUsername($username)
	{
		return User::with('ideas')->whereUsername($username)->first();
	}


	/**
	 * Find a user by their id 
	 * @param  int $id
	 * @return mixed 
	 */
	public function findById($id)
	{
		return User::findOrFail($id);
	}

	/**
	 * Subscribe to a MakerHub User
	 * 
	 * @param  			  $userIdToSubscribeTo [description]
	 * @param  User 	$user                [description]
	 */
	public function subscribe($userIdToSubscribeTo, User $user)
	{
		return $user->subscribedUsers()->attach($userIdToSubscribeTo);
	}

		/**
	 * UNsubscribe to a MakerHub User
	 * 
	 * @param  			  $userIdToSubscribeTo [description]
	 * @param  User 	$user                [description]
	 */
	public function unsubscribe($userIdToUnsubscribe, User $user)
	{
		return $user->subscribedUsers()->detach($userIdToUnsubscribe);
	}

	/**
	 * Pull the list of Users the currentUser is subscribed to
	 * 
	 * @param  User   $user 
	 * @return mixed 
	 */
	public function getSubscriptionsForUser(User $user)
	{
		$userIds = $user->subscribes()->lists('followed_id');

		return User::whereIn('id', $userIds)->latest()->get();
	}

}
