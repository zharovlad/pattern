<?php

abstract class IMenuItem {
    protected $name;
    protected $mesure;
    protected $quantity;
    protected $price;

    abstract public function getPrice();

    abstract public function getQuantity();

    abstract function getMesure();

    abstract  function getInfo();
    
}

