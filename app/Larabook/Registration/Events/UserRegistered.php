<?php
/**
 * Created by PhpStorm.
 * User: shishir
 * Date: 1/27/15
 * Time: 3:33 PM
 */

namespace Larabook\Registration\Events;

use Larabook\Users\User;

class UserRegistered {
    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }


}