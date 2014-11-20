<?php namespace MakerHub\Ideas;

class PublishIdeaCommand
{
	public $content;
	public $userId;

	/**
	 * Constructor
	 *
	 * @param $title
	 * @param $content
	 */
	function __construct($content, $userId) 
	{
		$this->content = $content;
		$this->userId = $userId;
	}
}