<?php
include_once 'DishMesure.php';
include_once 'IMenuItem.php';


class Dish extends IMenuItem {
    public function __construct($name, $price, $quantity=defaultQuantityDish) {
        $this->name = $name;
        $this->mesure = new DishMesure();
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