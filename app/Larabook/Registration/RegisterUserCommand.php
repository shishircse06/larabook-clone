<?php
/**
 * Created by PhpStorm.
 * User: shishir
 * Date: 1/26/15
 * Time: 7:10 PM
 */

namespace Larabook\Registration;


class RegisterUserCommand {
    public $username;
    public $email;
    public $password;

    function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }


}