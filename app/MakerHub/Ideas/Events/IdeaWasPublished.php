<?php namespace MakerHub\Ideas\Events;

class IdeaWasPublished
{
	public $title;
	public $content;
	
	function __construct($content)
	{
		$this->content = $content;
	}
}