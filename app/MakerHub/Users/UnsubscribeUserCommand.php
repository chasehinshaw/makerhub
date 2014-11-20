<?php namespace MakerHub\Users;

class UnsubscribeUserCommand {

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userIdToUnsubscribe;

    /**
     * @param string userId
     * @param string userIdToUnsubscribe
     */
    public function __construct($userId, $userIdToUnsubscribe)
    {
        $this->userId = $userId;
        $this->userIdToUnsubscribe = $userIdToUnsubscribe;
    }

}