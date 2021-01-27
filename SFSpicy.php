<?php

include_once 'SFPizza.php';


class SFSpicy extends SFPizza {
    public function __construct($size) {
        $this->name = 'Spicy';
        $this->size = $size;
        $this->components = 'Pepper and cheese and chicken';
    }
}