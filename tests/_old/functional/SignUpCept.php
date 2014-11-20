<?php 

$I = new FunctionalTester($scenario);
$I->am('guest');
$I->wantTo('Sign up for a Makerhub account');

$I->amOnPage('/');
$I->click('Sign Up!');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'JohnDoe');
$I->fillField('Email:', 'john@example.com');
$I->fillField('Password:', 'demo');
$I->fillField('Confirm Password:', 'demo');
$I->click('Sign Up!');

$I->seeCurrentUrlEquals('');
$I->see('Welcome to MakerHub!');
$I->seeRecord('users', [
	'username' => 'johndoe'
]);
$I->assertTrue(Auth::check());