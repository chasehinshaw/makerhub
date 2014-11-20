<?php

use MakerHub\Forms\RegistrationForm;
use MakerHub\Registration\RegisterUserCommand;

class RegistrationController extends \BaseController 
{

	/**
	 * @var RegistrationForm
	 */
	private $registrationForm;

	/**
	 * Constructor
	 *
	 * @param  RegistrationForm $registrationForm
	 */
	function __construct( RegistrationForm $registrationForm )
	{
		$this->registrationForm = $registrationForm;
		$this->beforeFilter('guest');
	}

	/**
	 * Show a form to register the user
	 *
	 * @return Response
	 */
	public function create()
	{
		$title = 'MakerHub | Register';
		return View::make('registration.create')
			->withTitle($title);
	}

	/**
	 * Create a new Makerhub user
	 *
	 * @return string
	 */
	public function store()
	{
		// Validate the form
		$this->registrationForm->validate( Input::all() );

		/*-- Converts Form Inputs into separate $variables --*/
		$user = $this->execute(RegisterUserCommand::class);
		// NOTE: 
		// using the "::class " will essentially send you to:
		// MakerHub\Registration\RegisterUserCommand
		// but the class must be imported first

		// Login User
		Auth::login($user);

		Flash::message('Thanks for joining!');

		return Redirect::route('home');
	}

}
