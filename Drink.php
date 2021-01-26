<?php
include_once 'DrinkMesure.php';
include_once 'IMenuItem.php';


class Drink extends IMenuItem {

    public function __construct($name, $price, $quantity=defaultQuantityDrink) {
        $this->name = $name;
        $this->mesure = new DrinkMesure();
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getMesure() {
        return $this->mesure->getMesure();
    }

    public function getInfo() {
        return strval($this->name) . ' ' . strval($this->quantity) . ' ' . strval($this->mesure->getMesure()) . '. Price is ' . strval($this->price);
    }

}