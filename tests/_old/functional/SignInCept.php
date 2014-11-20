<?php 
$I = new FunctionalTester($scenario);
$I->am('a MakerHub member');
$I->wantTo('login to my Makerhub account');

$I->signIn();

$I->seeInCurrentUrl('/ideas');
$I->see('Welcome back!');
$I->assertTrue(Auth::check());
