<?php

namespace Andy\Validation;

use Input;
use Validator;
use Illuminate\Support\Contracts\MessageProviderInterface;
use Andy\Exceptions\ValidatorContextException;

abstract class ValidatorService implements MessageProviderInterface {

    const DEFAULT_KEY = 'default';

    protected $attributes = [];
    protected $rules = [];
    protected $messages = [];
    protected $label = [];
    protected $mergeDefault = true;
    protected $contexts = [];
    protected $replacements = [];
    protected $errors = [];

    function __construct($attributes = null, $context = null, $mergeDefault = true) {
        $this->attributes = $attributes ? : Input::all();
        $this->mergeDefault = $mergeDefault ? : $mergeDefault;
        if ($context) {
            $this->addContext($context);
        }
    }

    public static function make($attributes = null, $context = null, $mergeDefault = true) {
        return new static($attributes, $context, $mergeDefault);
    }

    public function addContext($context) {
        $context = is_array($context) ? $context : [$context];
        if ($this->mergeDefault) {
            array_unshift($context, self::DEFAULT_KEY);
        }
        $this->contexts = $context;
        return $this;
    }
    
    public function statusMerge($flag = true){
        $this->mergeDefault = $flag;
        return $this;
    }

    private function getReplacement($field) {
        return array_get($this->replacements, $field, []);
    }

    public function bindReplacement($field, array $replacement) {
        $this->replacements[$field] = $replacement;

        return $this;
    }

    public function getMessageBag() {
        $this->errors();
    }

    public function errors() {
        return $this->errors;
    }

    public function passes() {
        $rules = $this->bindReplacements($this->getRulesInContext());
        $validation = Validator::make($this->attributes, $rules, $this->messages);
        isset($this->label) && count($this->label) ? $validation->setAttributeNames($this->label) : '';
        if ($validation->passes()) {
            return true;
        }

        $this->errors = $validation->messages();

        return false;
    }

    private function getRulesInContext() {
        if (!$this->hasContext()) {
            return $this->rules;
        }
        $rulesInContext = [];
        foreach ($this->contexts as $context) {
            if (!array_get($this->rules, $context)) {
                throw new ValidatorContextException;
            }
            $rulesInContext = array_merge($rulesInContext, $this->rules[$context]);
        }
        return $rulesInContext;
    }

    private function bindReplacements($rules) {
        foreach ($rules as $field => &$rule) {
            $replacements = $this->getReplacement($field);
            try {
                $rule = preg_replace_callback('/@(\w+)/', function($matches) use($replacements) {
                    return $replacements[$matches[1]];
                }, $rule);
            } catch (\ErrorException $e) {
                
            }
        }

        return $rules;
    }

    private function hasContext() {
        return count($this->contexts);
    }

}
