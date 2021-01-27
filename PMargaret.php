<?php
include_once 'Prototype.php';

class PMargaret extends Prototype {
    public function __construct() {
        $this->name = 'Margaret';
        $this->cost = 450;
        $this->size = 35;

    }

    public function clonePizza() {
        return new PMargaret($this);
    }

}