<?php

class Post extends \Eloquent {

    protected $fillable = [];

    public function categories() {
        $this->belongsTo('Categories');
    }

}
