<?php

include_once 'IAFDough.php';

class AFTastyDough extends IAFDough {
    public function __construct() {
        $this->cost = 200;
        $this->name = 'Tasty';
    }

}