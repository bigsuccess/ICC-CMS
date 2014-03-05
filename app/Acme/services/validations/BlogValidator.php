<?php

namespace Acme\Validation;

use Andy\Validation\ValidatorService;

class BlogValidator extends ValidatorService {

    protected $rules = [
        'default' => [
            ''
        ],
        'create' => [
            'title' => 'required|unique:blogs'
        ],
        'update' => [
            'title' => 'required|unique:blogs,title,@id'
        ]
    ];

}
