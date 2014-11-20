<?php namespace MakerHub\Forms;

use Laracasts\Validation\FormValidator;

/**
 * Validation Rules for the Sign In Form
 *
 * @var array
 */
class SignInForm extends FormValidator
{
	protected $rules = [
		'email' => 'required',
		'password' => 'required'
	];
}