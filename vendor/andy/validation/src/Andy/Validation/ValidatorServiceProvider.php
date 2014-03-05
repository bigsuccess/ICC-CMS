<?php

namespace Andy\Validation;

use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider {

    public function register() {
        $this->app->bind('validation', 'Andy\Validation\ValidatorService');
    }

}
