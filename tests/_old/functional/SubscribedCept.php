<?php 

$I = new FunctionalTester($scenario);

$I->am('a Makerhub user.')
$I->wantTo('Follow other MakerHub users.');
// And ideas projects & objects in the future 

// setUp
$I->haveAnAccount(['username'=>'OtherUser'])
$I->signIn();

// action
$I->click('Explore');
$I->click('OtherUser');

$I->seeCurrentUrlEquals('/@OtherUser');
$I->click('Follow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');

$I->see('You are following OtherUser');
$I->dontSee('Follow OtherUser');

// expectations
