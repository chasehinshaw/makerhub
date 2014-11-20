<?php
use MakerHub\Users\SubscribeUserCommand;
use MakerHub\Users\UnsubscribeUserCommand;
use MakerHub\Users\UserRepository;


class SubscriptionsController extends \BaseController {

	protected $userRepository;

	function __construct(UserRepository $userRepository) {
		$this->userRepository = $userRepository;
	}

	public function index()
	{
		// retreive the list of subscriptions for currentUser
		$users = $this->userRepository->getSubscriptionsForUser(Auth::user());

		// Display the list of subscribed users
		return View::make('users.subscriptions')->withUsers($users);
	}

	/**
	 * Subecribe to a user
	 * POST /subscription
	 *
	 * @return Response
	 */
	public function store()
	{
		// id of the user to follow
		// id of the currentUser
		$input = array_add(Input::get(), 'userId', Auth::id());

		$this->execute(SubscribeUserCommand::class, $input);

		Flash::success('You are now following this user');

		return Redirect::back();
	}

	/**
	 * Unsubscribe from a user
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($idOfUserToUnsubscribe)
	{
		$input = array_add(Input::get(), 'userId', Auth::id());

		$this->execute(UnsubscribeUserCommand::class, $input);

		Flash::message('You have now unfollowed this user');

		return Redirect::back();
	}

}