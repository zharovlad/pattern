<?php
include_once 'Prototype.php';

class PPepperoni extends Prototype {
    public function __construct() {
        $this->name = 'Pepperoni';
        $this->cost = 650;
        $this->size = 35;

    }

    public function clonePizza() {
        return new PPepperoni($this);
    }

}