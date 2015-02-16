<?php

use Larabook\Forms\SignInForm;

class SessionsController extends \BaseController {
	private $signInForm;

	function __construct(SignInForm $signInForm)
	{
		$this->signInForm=$signInForm;
		$this->beforeFilter('guest',['except'=>'destroy']);

	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

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
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input=Input::only('email','password');
		$this->signInForm->validate($input);
		if(Auth::attempt($input)){
			return Redirect::intended('statuses')->with('flash_message','Welcome Back!');
		}

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
	public function destroy()
	{
		Auth::logout();
		return Redirect::home()->with('flash_message','You have logged out now!');
	}


}
