<?php

include_once 'IAFFactory.php';
include_once 'AFCheeseAndTomato.php';
include_once 'AFThinDough.php';
include_once 'AFPizza.php';

class AFMargaret extends IAFFactory {

    public function createPizza() {
        $filling = new AFCheeseAndTomato();
        $dough = new AFThinDough();
        return new AFPizza($dough, $filling);
    }
    
}