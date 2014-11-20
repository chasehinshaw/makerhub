<?php
use MakerHub\Forms\SignInForm;

class SessionsController extends \BaseController 
{
	
	/**
	 * @var MakerHub\Forms\SignInForm 
	 **/
	private $signInForm;

	public function __construct( SignInForm $signInForm ) 
	{
		$this->signInForm = $signInForm;
		$this->beforeFilter('guest', ['except' => 'destroy']);
	}

	/**
	 * Show the form for Signing In.
	 *
	 * @return Response
	 */
	public function create()
	{
		$title = 'Login | MakerHub';

		return View::make('sessions.create')
			->withTitle($title);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// fetch the form input
		$formData = Input::only('email', 'password');

		// validate the form
		$this->signInForm->validate( $formData );

		// if ! valid, then go back
		// see global.php
		
		// if valid, then try to sign in
		if( ! Auth::attempt($formData) )
		{
			Flash::message('We were unable to sign you in. Please check you credentials and try again!');
			return Redirect::back()->withInput();
		}
		Flash::message('Welcome back!');
		return Redirect::intended('ideas');
	}

	/**
	 * Log the user out of Makerhub
	 *
	 * @return mixed
	 */
	public function destroy()
	{
		Auth::logout();	
		Flash::message('You\'ve been logged out. See ya!');
		return Redirect::home();
	}

}
