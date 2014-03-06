<?php

namespace Acme\Validation;

use Andy\Validation\ValidatorService;

class RoleValidator extends ValidatorService {

    protected $rules = [
        'name' => 'required|min:3|max:60|unique:roles,name,@id'
    ];
    protected $label = [
        'name' => 'Tên'
    ];

}
