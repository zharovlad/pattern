<?php

include_once 'Dish.php';
include_once 'IBridgeShawarma.php';


class Shawarma extends Dish {
    protected $components;
    protected $type;
    public function __construct($type) {
        parent::__construct('shawarma', 200);
        $this->type = $type;
    }

    public function getSize() {
        $this->type->printSize();
    }

    public function getTimetoReady() {
        $this->type->printCookingTime();
    }

}