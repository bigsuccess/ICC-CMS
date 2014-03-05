<?php

class Category extends Eloquent {

    protected $guarded = array('id', 'order', 'meta_title', 'meta_keywords', 'meta_description', 'meta_image');
    public $timestamps = false;

}
