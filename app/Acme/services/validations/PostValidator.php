<?php

namespace Acme\Validation;

use Andy\Validation\ValidatorService;

class PostValidator extends ValidatorService {

    protected $rules = [
        'default' => [],
        'create' => [],
        'update' => []
    ];
    protected $label = [];

}
