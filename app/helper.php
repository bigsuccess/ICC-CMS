<?php

function active($slug = null) {
    if (Request::is('nevergiveup/' . $slug) || is_null($slug)) {
        return 'class="active"';
    }
    return '';
}

function hasError($key) {
    $errors = Session::get('errors');
    if (count($errors) && $errors->has($key)) {
        return true;
    }
    return false;
}

function statusValidator($key) {
    $status = '';
    if (hasError($key)) {
        $status = 'has-error';
    } elseif (Session::has('errors') && !hasError($key)) {
        $status = 'has-success';
    }
    return $status;
}

function alertError($key) {
    $errors = Session::get('errors');
    if (hasError($key)) {
        return $errors->first($key, '<p class="help-block">:message</p>');
    }
    return '';
}

function statusCategory($type) {
    $status = 'Không kích hoạt';
    if ($type == 1) {
        $status = 'Kích hoạt';
    }
    return $status;
}
