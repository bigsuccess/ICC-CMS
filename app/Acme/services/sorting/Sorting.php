<?php

namespace Acme\Sorting;

class Sorting {
    
    /*
     * get_nested to sort
     * parameter is array
     * return tree;
     */

    public function get_nested($data) {
        $nodes = array();
        $tree = array();
        foreach ($data as &$node) {
            $node->children = array();
            $id = $node->id;
            $parent_id = $node->parent_id;
            $nodes[$id] = & $node;
            if (array_key_exists($parent_id, $nodes)) {
                $nodes[$parent_id]->children[] = & $node;
            } else {
                $tree[] = & $node;
            }
        }
        return $tree;
    }

}
