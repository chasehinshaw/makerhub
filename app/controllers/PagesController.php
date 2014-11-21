<?php  

class PagesController extends \BaseController
{
	public function showHome()
	{
		$title = 'Makerhub | Welcome';
		return View::make('pages.home')
			->withTitle($title);
	}

	public function showLearn()
	{
		$title = 'MakerHub | Learn';
		return View::make('pages.learn')
			->withTitle($title); 
	}

	public function showProject()
	{
		return View::make('pages.project');
	}

	public function showObject()
	{
		return View::make('pages.object');
	}
}