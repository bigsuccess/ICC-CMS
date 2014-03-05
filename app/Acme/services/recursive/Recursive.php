<?php

namespace Acme\Recursive;

class Recursive {

    protected $data = [];

    public function dropdown($data, $parent = 0, $text = ' ') {
        foreach ($data as $value) {
            if ($value->parent_id == $parent) {
                $id = $value->id;
                $name = $text . $value->name;
                $this->data[$id] = $name;
                $this->dropdown($data, $value->id, $text . "--");
            }
        }
        return $this->data;
    }

}
