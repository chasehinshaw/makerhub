<?php

/* Home Routes */
Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@showHome'
]);

/* Registration */
Route::get('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@create'
]);
Route::post('register', [
	'as' => 'register_path',
	'uses' => 'RegistrationController@store'
]);

/* Sessions */
Route::get('login', [
	'as' => 'login_path',
	'uses' => 'SessionsController@create'
]);
Route::post('login', [
	'as' => 'login_path',
	'uses' => 'SessionsController@store'
]);
Route::get('logout', [
	'as' => 'logout_path',
	'uses' => 'SessionsController@destroy'
]);



/**
 * This is the MakerHub authenticated homepage
 * instead of '/ideas' change to '/myhub' as 'home'
 */

/* Show Ideas  */
Route::get('ideas', [
	'as' => 'ideas_path',
	'uses' => 'IdeasController@index'
]);


/* Post a New Idea */
Route::post('ideas', [
	'as' => 'ideas_path',
	'uses' => 'IdeasController@store'
]);
/* Post a Comment (on Idea) */
Route::post('ideas/{id}/comments', [
	'as' => 'comment_path',
	'uses' => 'CommentsController@store'
]);



/**
 * This is the Currently pulling all the Users
 * in what would be the EXPLORE page. I need to
 * change this to the PagesController. 
 *
 * Index content for users (first 50) and also
 * pull list of top Ideas..
 */

/* Users -- to become EXPLORE page -- */
Route::get('users', [
	'as' => 'users_path',
	'uses' => 'UsersController@index'
]);


/* Profile */
Route::get('{username}', [
	'as' => 'profile_path',
	'uses' => 'UsersController@show'
]);
Route::get('{username}/edit',[
	'as' => 'edit_profile_path',
	'uses' => 'UsersController@edit'
]);
Route::post('{username}/edit',[
	'as' => 'edit_profile_path',
	'uses' => 'UsersController@update'
]);

/* Subscriptions */
Route::get('subscriptions', [
	'as' => 'subscriptions_path',
	'uses' => 'SubscriptionsController@index'
]);
Route::post('subscribe', [
	'as' => 'subscribe_path',
	'uses' => 'SubscriptionsController@store'
]);
Route::delete('unsubscribe/{id}', [
	'as' => 'unsubscribe_path',
	'uses' => 'SubscriptionsController@destroy'
]);

/* Password Reset */
Route::controller('password', 'RemindersController');

/**
*
* / 										= (public) home
* /features 						= features
* /about 								= about
* /explore							= explore (explore)
* 
* ---LOGGED IN---
* 
* /myhub 									= home
* 
* /myhub/{username}				= profile
* /myhub/{username}/edit 	= edit user profile
* 
* /myhub/subscriptions		= subscriptions
* /myhub/notifications		= notifications
* 
* /ideas/create 					= create new idea
* /ideas/{id}							= idea page
* /ideas/{id}/edit 				= edit idea
* 
* /projects/create 				= create new project
* /projects/{id}					= project page
* /projects/{id}/edit 		= edit project
* 
* /objects/create 				= create new object
* /objects/{id}						= object page
* /objects/{id}/edit 			= edit object
* 
* /{type}/activity				= item activity 
*
**/
