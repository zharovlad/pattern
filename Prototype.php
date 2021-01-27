<?php

class Prototype {
    protected $name;
    protected $cost;
    protected $size;

    public function clonePizza() {

    }

    public function printInfo() {
        echo $this->name . ' ' . $this->cost . ' ' . $this->size . '<br/>';
    }
}