<?php

namespace Acme\Validation;

use Andy\Validation\ValidatorService;

class CategoryValidator extends ValidatorService {

    protected $rules = [
        'default' => [
            'name' => 'required|min:3|max:60',
            'parent_id' => 'required|numeric',
            'status' => 'required|numeric'
        ],
        'create' => [
            'slug' => 'required|min:3|max:60|unique:categories'
        ],
        'update' => [
            'slug' => 'required|min:3|max:60|unique:categories,id,@id'
        ]
    ];
    protected $label = [
        'name' => 'Tên chuyên mục',
        'slug' => 'Slug',
        'parent_id' => 'Chuyên mục cha',
        'status' => 'Trạng thái'
    ];

}
