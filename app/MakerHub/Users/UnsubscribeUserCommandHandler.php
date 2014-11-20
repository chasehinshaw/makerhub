<?php namespace MakerHub\Users;

use Laracasts\Commander\CommandHandler;
use MakerHub\Users\UserRepository;

class UnsubscribeUserCommandHandler implements CommandHandler {

	protected $userRepo;

	function __construct(UserRepository $userRepo) {
		$this->userRepo = $userRepo;
	}

  /**
   * Handle the command.
   *
   * @param object $command
   * @return void
   */
  public function handle($command)
  {
  	$user = $this->userRepo->findById($command->userId);

  	$this->userRepo->unsubscribe($command->userIdToUnsubscribe, $user);
  }

}