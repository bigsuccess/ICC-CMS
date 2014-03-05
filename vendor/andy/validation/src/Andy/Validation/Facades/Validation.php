<?php

namespace Andy\Validation\Facades;

use Illuminate\Support\Facades\Facade;

class Validation extends Facade {

    public static function getFacadeAccessor() {
        return 'validation';
    }

}
