<?php namespace Codeception\Module;

use Laracasts\TestDummy\Factory as TestDummy;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{
	public function signIn()
	{
		$email = 'foo@example.com';
		$username = 'Foobar'
		$password = 'foo';

		$this->haveAnAccount(compact('username', 'email', 'password'));

		$I = $this->getModule('Laravel4');

		$I->amOnPage('/login');
		$I->fillField('email', $email);
		$I->fillField('password', $password);
		$I->click('Sign In');
	}

	public function postAnIdea($content)
	{
		$I = $this->getModule('Laravel4');
		$I->fillField('content', $content);
		$I->click('Post Idea');
		//$this->have('MakerHub\Ideas\Idea', $overrides);
	}

	public function have($model, $overrides = [])
	{
		return TestDummy::create($model, $overrides);
	}

	/**
	 * Uses Test Dummy to help the test pass 
	 *
	 * @return $user 
	 **/
	public function haveAnAccount($overrides = [])
	{
		return $this->have('MakerHub\Users\User', $overrides);
	}
}