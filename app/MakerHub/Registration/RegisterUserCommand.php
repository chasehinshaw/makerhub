<?php namespace MakerHub\Registration;

/**
* 
*/
class RegisterUserCommand
{
	public $username;
	public $email;
	public $password;

	/**
	 * Constructor
	 *
	 * @param $username
	 * @param $email
	 * @param $password
	 */
	function __construct($username, $email, $password) 
	{
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
	}
}