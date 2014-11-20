<?php 
$I = new FunctionalTester($scenario);
$I->am('a MakerHub member');
$I->wantTo('view all users registered to MakerHub');

$I->haveAnAccount(['username' => 'foo']);
$I->haveAnAccount(['username' => 'bar']);

$I->amOnPage('/users');
$I->see('Foo');
$I->see('Bar');