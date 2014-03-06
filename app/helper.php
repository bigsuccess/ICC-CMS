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

function status($type) {
    $status = 'Không kích hoạt';
    if ($type == 1) {
        $status = 'Kích hoạt';
    }
    return $status;
}

function get_ol(&$list, $child = FALSE) {
    $str = '';
    if (count($list)) {
        $str .= $child == FALSE ? '<ol class="sortable">' : '<ol>';
        foreach ($list as $item) {
            $str .= '<li id="list_' . $item->id . '">';
            $str .= '<div>' . $item->name . '</div>';
            if (isset($item->children) && count($item->children)) {
                $str .= get_ol($item->children, TRUE);
            }
            $str .= '</li>' . PHP_EOL;
        }
        $str .= '</ol>' . PHP_EOL;
    }
    return $str;
}
