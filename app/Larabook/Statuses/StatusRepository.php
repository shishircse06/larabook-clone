<?php
/**
 * Created by PhpStorm.
 * User: shishir
 * Date: 2/16/15
 * Time: 4:10 PM
 */

namespace Larabook\Statuses;


use Larabook\Users\User;

class StatusRepository {

    public function getAll(User $user){
        return $user->statuses()->get();
    }

    public function save(Status $status, $userId){
        return User::findOrFail($userId)->statuses()->save($status);

    }
}