<?php namespace MakerHub\Providers;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

	/**
	 * Register MakerHub event listeners.
	 * 
	 */
	public function register()
	{
		$this->app['events']->listen('MakerHub.*', 'MakerHub\Handlers\EmailNotifier');
	}
}