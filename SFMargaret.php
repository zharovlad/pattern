<?php

include_once 'SFPizza.php';


class SFMargaret extends SFPizza {
    public function __construct($size) {
        $this->name = 'Margare';
        $this->size = $size;
        $this->components = 'Tomato and cheese';
    }
}