<?php

namespace Crhayes\Validation;

use Crhayes\Validation\Exceptions\MissingValidatorException;
use Illuminate\Support\Contracts\MessageProviderInterface;

class GroupedValidator
{
	/**
	 * An array of Validator objects we will spin through
	 * when running our grouped validation.
	 * 
	 * @var array
	 */
	private $validators = [];

	/**
	 * An array of errors returned from all of the validators.
	 * 
	 * @var array
	 */
	private $errors = [];

	/**
	 * Create a new GroupedValidator, with the option of specifying
	 * either a single validator object or an array of validators.
	 * 
	 * @param mixed 	$validator
	 */
	public function __construct($validator = [])
	{
		if ($validator) $this->addValidator($validator);
	}

	/**
	 * Static shorthand for creating a new grouped validator.
	 * 
	 * @param  mixed 	$validator
	 * @return Crhayes\Validation\GroupedValidator
	 */
	public static function make($validator = [])
	{
		return new static($validator);
	}

	/**
	 * Add a validator to spin through. Accepts either a single
	 * Validator object or an array of validators.
	 * 
	 * @param mixed 	$validator
	 */
	public function addValidator(MessageProviderInterface $validator)
	{
		$validator = is_array($validator) ? $validator : [$validator];
		
		$this->validators = array_merge($this->validators, $validator);

		return $this;
	}

	/**
	 * Perform a check to see if all of the validators have passed.
	 * 
	 * @return boolean
	 */
	public function passes()
	{
		if ( ! count($this->validators)) throw new MissingValidatorException('No validators provided: You must provide at least one validator');

		foreach ($this->validators as $validator)
		{
			if ( ! $validator->passes())
			{
				$this->errors += $validator->getMessageBag()->getMessages();
			}
		}

		return (count($this->errors)) ? false : true;
	}

	/**
	 * Return the combined errors from all validators.
	 * 
	 * @return Illuminate\Support\MessageBag
	 */
	public function errors()
	{
		return new \Illuminate\Support\MessageBag($this->errors);
	}
}