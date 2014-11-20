<?php namespace MakerHub\Ideas;

/**
* 	
*/
class IdeaComment extends \Eloquent
{
	/**
	 * @var array
	 */
	protected $fillable = ['user_id', 'idea_id', 'body'];

	/**
	 * @return mixed
	 */
	public function owner()
	{
		return $this->belongsTo('MakerHub\Users\User', 'user_id');
	}

	public static function leave($body, $ideaId)
	{
		return new static([
			'body' => $body,
			'idea_id' => $ideaId
		]);
	}

}