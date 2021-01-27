<?php

include_once 'IAFDough.php';

class AFThinDough extends IAFDough {
    public function __construct() {
        $this->cost = 190;
        $this->name = 'Thin';
    }

}