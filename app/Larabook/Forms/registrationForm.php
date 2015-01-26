<?php
namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

class registrationForm extends FormValidator{
 protected $rules=[
     'username'=>'required|unique:users',
     'email'=>'required|email|unique:users',
     'password'=>'required|confirmed'
 ];


}
