<?php 
$I = new FunctionalTester($scenario);

$I->am('a Larabook member');
$I->wantTo('I want to post statuses to my profile.');

$I->amOnPage('statuses');

$I->postAStatus(['body'=>'My first post!']);

$I->seeCurrentUrlEquals('statuses');
$I->see('My first post!');
