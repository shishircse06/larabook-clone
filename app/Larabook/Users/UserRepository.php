<?php
/**
 * Created by PhpStorm.
 * User: shishir
 * Date: 1/26/15
 * Time: 7:43 PM
 */

namespace Larabook\Users;


class UserRepository {
    public function save(User $user){
        return $user->save();

    }

}