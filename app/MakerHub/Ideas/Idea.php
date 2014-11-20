<?php namespace MakerHub\Ideas;
use MakerHub\Ideas\Events\IdeaWasPublished;
use MakerHub\Ideas\Comment;
use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;

class Idea extends \Eloquent
{
	use EventGenerator, PresentableTrait;
	/**
	 * Fillable Fields for a new Idea
	 *
	 * @var fillable
	 **/
	protected $fillable = ['title', 'content', ];
	
	/**
	 * Path to a presenter for a status
	 * 
	 * @var presenter
	 */
	protected $presenter = 'MakerHub\Ideas\IdeaPresenter';

	/**
	 * An Idea belongs to a user
	 * 
	 * @return mixed
	 */
	public function user()
	{
		return $this->belongsTo('MakerHub\Users\User');
	}

	/**
	 * Publish a new idea
	 * 
	 * @param  $content
	 * @return static
	 */
	public static function publish( $content )
	{
		$idea = new static(compact('content'));

		$idea->raise(new IdeaWasPublished($content));

		return $idea; 
	}

	/**
	 * @return mixed
	 */
	public function ideaComments()
	{
		return $this->hasMany('MakerHub\Ideas\IdeaComment');
	}

}