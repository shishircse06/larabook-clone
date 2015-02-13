<?php

use Larabook\Forms\registrationForm;
use Larabook\Registration\RegisterUserCommand;
use Larabook\Core\CommandBus;

class RegistrationController extends \BaseController {
	use CommandBus;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	private $registrationForm;
	/**
	 * @var CommandBus
	 */


	function __construct(RegistrationForm $registrationForm){
		$this->registrationForm=$registrationForm;

	}

	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->registrationForm->validate(Input::All());

		extract(Input::only('username','email','password'));


		$user=$this->execute(
			new RegisterUserCommand($username,$email,$password)
		);

		Auth::login($user);

		return Redirect::home()->with('flash_message','Thanks for registration!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
