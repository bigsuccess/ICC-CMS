<?php

Form::macro('delete', function($url,
        $button_label = 'Xóa',
        $form_parameters = array(),
        $button_options = array()
        ) {

    if (empty($form_parameters) && empty($button_options)) {
        $form_parameters = array(
            'method' => 'DELETE',
            'url' => $url
        );
        $button_options = array(
            'class' => 'btn btn-danger btn-xs confirmDelete',
        );
    } else {
        $form_parameters['url'] = $url;
        $form_parameters['method'] = 'DELETE';
    };

    return Form::open($form_parameters)
            . Form::button($button_label, $button_options)
            . Form::close();
});

