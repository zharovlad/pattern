<?php

include_once 'IAFFactory.php';
include_once 'AFCheeseAndPepperoni.php';
include_once 'AFTastyDough.php';
include_once 'AFPizza.php';

class AFPepperoni extends IAFFactory {

    public function createPizza() {
        $filling = new AFCheeseAndPepperoni();
        $dough = new AFTastyDough();
        return new AFPizza($dough, $filling);
    }

}