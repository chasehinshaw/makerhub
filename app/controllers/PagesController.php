<?php  

class PagesController extends \BaseController
{
	public function showHome()
	{
		$title = 'Makerhub | Welcome';
		return View::make('pages.home')
			->withTitle($title);
	}
}