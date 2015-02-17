<?php
/**
 * Created by PhpStorm.
 * User: shishir
 * Date: 2/16/15
 * Time: 4:10 PM
 */

namespace Larabook\Statuses;


use Larabook\Users\User;

/**
 * Class StatusRepository
 * @package Larabook\Statuses
 */
class StatusRepository {

    /**
     * @param User $user
     * get all statuses for a user
     * @return mixed
     */
    public function getAll(User $user){
        return $user->statuses()->get();
    }

    /**
     *
     * @param Status $status
     * @param $userId
     * save status for a specific user
     *
     * @return mixed
     */
    public function save(Status $status, $userId){

        return User::findOrFail($userId)->statuses()->save($status);

    }
}