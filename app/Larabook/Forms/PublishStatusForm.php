<?php
/**
 * Created by PhpStorm.
 * User: shishir
 * Date: 2/16/15
 * Time: 5:33 PM
 */

namespace Larabook\Forms;


use Laracasts\Validation\FormValidator;

class PublishStatusForm extends FormValidator{
    protected $rules=[
        'body'=>'required'

    ];
}