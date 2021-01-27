<?php

include_once 'IAFFilling.php';

class AFCheeseAndPepperoni extends IAFFilling {

    public function __construct() {
        $this->cost = 200;
        $this->components = 'Cheese and pepperoni';
    }

}