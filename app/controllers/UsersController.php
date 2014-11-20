<?php
use MakerHub\Users\UserRepository;
use MakerHub\Forms\EditProfileForm;
use MakerHub\Users\EditUserCommand;

class UsersController extends \BaseController {

	protected $userRepository;
	protected $editProfileForm;

	/**
	 * Class construct to set up the User Repository
	 * and the form validation to edit users' profiles.
	 * 
	 * @param UserRepository  $userRepository  [description]
	 * @param EditProfileForm $editProfileForm [description]
	 */
	function __construct(UserRepository $userRepository, EditProfileForm $editProfileForm) {
		$this->userRepository = $userRepository;
		$this->editProfileForm = $editProfileForm;
	}

	/**
	 * Display the Users Profile
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->userRepository->getPaginated();

		return View::make('users.index')->withUsers($users);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		$user = $this->userRepository->findByUsername($username);

		return View::make('users.profile')->withUser($user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($username)
	{
		$title = 'Profile | Edit';
		return View::make('users.partials.edit-profile-form')
			->withTitle($title);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($username)
	{
		// Validate the form
		$this->editProfileForm->validate( Input::all() );

		/*-- Converts Form Inputs into separate $variables --*/
		$user = $this->execute(EditUserCommand::class);
		Flash::message('Profile Sucessfully Updated');
		return Redirect::route('profile_path');
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
