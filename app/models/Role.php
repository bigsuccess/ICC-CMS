<?php

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole {

    protected $guarded = array();
    public $timestamps = false;
    public $table = 'roles';

    public function user() {
        return $this->hasMany('User');
    }

}
