<?php namespace MakerHub\Ideas;

use Laracasts\Commander\CommandHandler;

class LeaveCommentOnIdeaCommandHandler implements CommandHandler {

	/**
	 * @var IdeaRepository
	 */
	private $ideaRepo;

	function __construct(IdeaRepository $ideaRepo) 
	{
		$this->ideaRepo = $ideaRepo;
	}

  /**
   * Handle the command.
   *
   * @param object $command
   * @return mixed
   */
  public function handle($command)
  {
  	$comment = $this->ideaRepo->leaveComment($command->user_id, $command->idea_id, $command->body);

  	return $comment;
  }

}