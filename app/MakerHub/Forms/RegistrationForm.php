<?php namespace MakerHub\Forms;

use Laracasts\Validation\FormValidator;

/**
 * Validation Rules for the Registration Form
 *
 * @var array
 */
class RegistrationForm extends FormValidator
{
	protected $rules = [
		'username' => 'required|unique:users',
		'email' => 'required|email|unique:users',
		'password' => 'required|confirmed'
	];
}