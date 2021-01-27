<?php

include_once 'SFPizza.php';


class SFPepperoni extends SFPizza {
    public function __construct($size) {
        $this->name = 'Pepperoni';
        $this->size = $size;
        $this->components = 'Pepperoni and cheese';
    }
}