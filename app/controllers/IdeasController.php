<?php
use MakerHub\Forms\PublishIdeaForm;
use MakerHub\Ideas\PublishIdeaCommand;
use MakerHub\Ideas\IdeaRepository;

class IdeasController extends \BaseController {

	protected $ideaRepository;
	protected $publishIdeaForm;

	function __construct(PublishIdeaForm $publishIdeaForm, IdeaRepository $ideaRepository) {
		$this->publishIdeaForm = $publishIdeaForm;
		$this->ideaRepository = $ideaRepository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$title = 'MakerHub | Ideas';
		$ideas = $this->ideaRepository->getFeedForUser(Auth::user());
		return View::make('ideas.index', compact('ideas'))
		->withTitle($title);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Save a new Idea
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::file('ideaPhoto');
		dd($input);
		//$input['userId'] = Auth::id();
		$input = array_add(Input::get(), 'userId', Auth::id());

		// Validate submission 
		$this->publishIdeaForm->validate(Input::only('content'));

		// Push the message out
		$this->execute(PublishIdeaCommand::class, $input);

		// Notifiy the client 
		Flash::message('Your Idea has been updated');

		return Redirect::back();
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
