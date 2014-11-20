<?php namespace MakerHub\Ideas;

use MakerHub\Users\User;
use MakerHub\Ideas\Idea;
use MakerHub\Ideas\IdeaComment;

class IdeaRepository 
{
	/**
	 * Get all Ideas associated with a user
	 * @param  User   $user
	 * @return mixed
	 */
	public function getAllForUser(User $user)
	{
		// orderBy['created_at', 'desc']
		return $user->ideas()->with('user')->latest()->get();
	}

	/**
	 * Get the feed for the user
	 * @param  User   $user [description]
	 * @return [type]       [description]
	 */
	public function getFeedForUser(User $user)
	{
		// Get Carousel|Featured Ideas
		
		// Send Highlight items & regular items in (Array?)

		$userIds = $user->subscribes()->lists('followed_id');
		$userIds[] = $user->id;

		return Idea::with('ideaComments')
						->whereIn('user_id', $userIds)
						->latest()
						->take(9)
						->get();
	}

	/**
	 * Save a new idea for a user
	 * @param  Idea   $Idea   
	 * @param  $userId 
	 * @return mixed
	 */
	public function save(Idea $idea, $userId)
	{
		return User::findOrFail($userId)
			->ideas()
			->save($idea);
	}

	/**
	 * Saves the new comment to the database
	 * @param  [type] $userId [description]
	 * @param  [type] $ideaId [description]
	 * @param  [type] $body   [description]
	 * @return [type]         [description]
	 */
	public function leaveComment($userId, $ideaId, $body)
	{
		$comment = IdeaComment::leave($body, $ideaId);

		User::findOrFail($userId)->ideaComments()->save($comment);

		return $comment;
	}

}