<?php namespace MakerHub\Forms;

use Laracasts\Validation\FormValidator;

/**
 * Validation Rules for the New Idea form
 *
 * @var array
 */
class PublishIdeaForm extends FormValidator
{
	protected $rules = [
		'content' => 'required'
	];
}