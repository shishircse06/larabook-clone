<?php namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I
use Laracasts\TestDummy\Factory as TestDummy;

class FunctionalHelper extends \Codeception\Module{

    public function signIn(){
        $this->haveAnAccount(['email'=>'foo@example.com','password'=>'foo']);

        $I= $this->getModule('Laravel4');
        $I->amOnPage('/login');
        $I->fillField('email', 'foo@example.com');
        $I->fillField('password', 'foo');
        $I->click('Sign In');
    }

    public function haveAnAccount($overrides){
        TestDummy::create('Larabook\Users\User', $overrides);

    }

}
