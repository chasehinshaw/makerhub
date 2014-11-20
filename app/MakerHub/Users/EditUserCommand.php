<?php namespace MakerHub\Users;

class EditUserCommand {

    /**
     * @var string
     */
    public $username;
    public $email;
    public $password;

    /**
     * @param string username
     * @param string email
     * @param string password
     */
    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

}