<?php

include_once 'IAFFilling.php';

class AFCheeseAndTomato extends IAFFilling {

    public function __construct() {
        $this->cost = 150;
        $this->components = 'Cheese and tomato';
    }

}