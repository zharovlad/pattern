<?php

include_once 'Dish.php';
include_once 'IBridgeShawarma.php';


class Shawarma extends Dish {
    protected $type;
    public function __construct($type, $name) {
        parent::__construct($name, 200);
        $this->type = $type;
    }

    public function getSize() {
        $this->type->printSize();
    }

    public function getTimetoReady() {
        $this->type->printCookingTime();
    }

}