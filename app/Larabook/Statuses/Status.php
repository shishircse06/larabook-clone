<?php
/**
 * Created by PhpStorm.
 * User: shishir
 * Date: 2/16/15
 * Time: 1:42 PM
 */

namespace Larabook\Statuses;


use Larabook\Statuses\Events\StatusWasPublished;
use Laracasts\Commander\Events\EventGenerator;

class Status extends \Eloquent{
    use EventGenerator;
    protected $fillable = ['body'];

    public static function publish($body){
        $status=new static(compact('body'));
        $status->raise(new StatusWasPublished($body));
        return $status;

    }

    /**
     * This status belongs to a user
     */
    public function user(){
        $this->belongsTo('Larabook\Users\User');
    }
}