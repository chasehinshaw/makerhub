<?php namespace MakerHub\Users;

use MakerHub\Users\UserRepository;
use Laracasts\Commander\CommandHandler;

class SubscribeUserCommandHandler implements CommandHandler{

	protected $userRepo;

	/**
	 * Setup the User Repository
	 * 
	 * @param UserRepository $userRepo 
	 */
	function __construct(UserRepository $userRepo) 
	{
		$this->userRepo = $userRepo;
	}


	/**
	 * Trigger to get user id from UserRepository
	 * 
	 * @param  $command 
	 * @return [type]          [description]
	 */
	public function handle($command)
	{
		$user = $this->userRepo->findById($command->userId);

		$this->userRepo->subscribe($command->userIdToSubscribeTo, $user);

		return $user;
	}

}