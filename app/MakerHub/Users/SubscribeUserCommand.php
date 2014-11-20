<?php namespace MakerHub\Users;

class SubscribeUserCommand {

	public $userId;
	public $userIdToSubscribeTo;

	function __construct($userId, $userIdToSubscribeTo)
	{
		$this->userId = $userId;
		$this->userIdToSubscribeTo = $userIdToSubscribeTo;
	}
}