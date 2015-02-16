<?php
/**
 * Created by PhpStorm.
 * User: shishir
 * Date: 2/16/15
 * Time: 3:52 PM
 */

namespace Larabook\Statuses;


class PublishStatusCommand {
    public $body;
    public $userId;

    function __construct($body,$userId)
    {
        $this->body = $body;

        $this->userId = $userId;
    }

}