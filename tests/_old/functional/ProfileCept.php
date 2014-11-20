<?php 

$I = new FunctionTester($scenario);
$I->am('a MakerHub member');
$I->wantTo('view my profile');

$I->signIn();
$I->postAStatus('My new status.');

$I->click('My Profile');
$I->seeCurrentUrlEquals('/@Foobar');

$I->see('My new status.');