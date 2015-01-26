<?php

use Larabook\Forms\registrationForm;
use Laracasts\Commander\CommandBus;

class RegistrationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	private $registrationForm;
	/**
	 * @var CommandBus
	 */
	private $commandBus;

	function __construct(CommandBus $commandBus,RegistrationForm $registrationForm){
		$this->registrationForm=$registrationForm;
		$this->commandBus = $commandBus;
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

		$command=new RegisterUserCommand;
		$this->commandBus->execute($command);
		
		$this->registrationForm->validate(Input::All());

		$user=User::create(
			Input::only('username','email','password')
		);
		Auth::login($user);
		return Redirect::home();
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
