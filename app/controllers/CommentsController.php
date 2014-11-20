<?php

use Laracasts\Commander\CommanderTrait;
use MakerHub\Ideas\LeaveCommentOnIdeaCommand;


class CommentsController extends \BaseController {
 
 use CommanderTrait;

	/**
	 * Leave a New Comment 
	 *
	 * @return Response
	 */
	public function store()
	{
		// fetch the input
		$input = array_add(Input::get(), 'user_id', Auth::id());
		
		// execute command: leave a comment on an idea
		$this->execute(LeaveCommentOnIdeaCommand::class, $input);

		// go back
		return Redirect::back();
	}
}