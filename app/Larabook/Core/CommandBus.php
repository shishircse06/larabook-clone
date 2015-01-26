<?php
/**
 * Created by PhpStorm.
 * User: shishir
 * Date: 1/26/15
 * Time: 8:13 PM
 */

namespace Larabook\Core;


use App;
trait CommandBus {

    public function execute($command){
        return $this->getCommandBus()->execute($command);
    }
    public function getCommandBus(){
        return App::make('Laracasts\Commander\CommandBus');
    }

}