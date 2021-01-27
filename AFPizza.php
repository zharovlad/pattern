<?php

include_once 'IAFDough.php';
include_once 'IAFFilling.php';

class AFPizza {
    protected $dough;
    protected $filling;

    public function __construct($dough, $filling) {
        $this->dough = $dough;
        $this->filling = $filling;
    }

    public function printInfo() {
        echo $this->dough->getName() . ' ' . $this->filling->getComponents() . ' ' . strval($this->dough->getCost() + $this->filling->getCost()) . '<br/>';
    }

}