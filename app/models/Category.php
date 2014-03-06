<?php

class Category extends Eloquent {

    protected $table = 'categories';
    
    
    protected $guarded = array('id', 'order', 'meta_title', 'meta_keywords', 'meta_description', 'meta_image');
    
    
    public $timestamps = false;
    
    public function Post(){
        $this->hasMany('Post');
    }

}
