<?php 
$I = new FunctionalTester($scenario);
$I->am('a MakerHub member');
$I->wantTo('post a new idea to my profile');

$I->signIn();

$I->amOnPage('ideas');

$I->postAnIdea('My First Idea!');

$I->seeCurrentUrlEquals('/ideas');
$I->see('My First Idea!');