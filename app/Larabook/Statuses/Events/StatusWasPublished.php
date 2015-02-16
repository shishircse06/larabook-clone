<?php
namespace Larabook\Statuses\Events;
/**
 * Created by PhpStorm.
 * User: shishir
 * Date: 2/16/15
 * Time: 4:04 PM
 */

class StatusWasPublished {
    public $body;

    function __construct($body)
    {
        $this->body = $body;
    }


}