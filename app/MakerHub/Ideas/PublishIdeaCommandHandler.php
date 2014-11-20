<?php namespace MakerHub\Ideas;

use MakerHub\Ideas\Idea;
use MakerHub\Ideas\IdeaRepository;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class PublishIdeaCommandHandler implements CommandHandler
{
	use DispatchableTrait;
	/**
	 * @var $ideaRepository
	 */
	protected $ideaRepository;

	/**
	 * @param IdeaRepository $ideaRepository [description]
	 */
	function __construct(IdeaRepository $ideaRepository)
	{
		$this->ideaRepository = $ideaRepository;
	}

	/**
	 * Handle the command
	 *
	 * @param $command
	 * @return mixed
	 */
	public function handle($command)
	{
		$idea = Idea::publish( $command->content );

		$idea = $this->ideaRepository->save($idea, $command->userId);

		$this->dispatchEventsFor($idea);
	}

}