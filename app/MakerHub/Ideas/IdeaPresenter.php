<?php namespace MakerHub\Ideas;
use Laracasts\Presenter\Presenter;

class IdeaPresenter extends Presenter
{
	/**
	 * Display the time related to publish date
	 * 
	 * @return the date in readable form
	 */
	public function timeSincePublished()
	{
		return $this->created_at->diffForHumans();
	}
}