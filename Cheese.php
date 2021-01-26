<?php
include_once 'AdditionalComponent.php';
const cheesePrice = 30;


class Cheese extends AdditionalComponent {

    public function __construct($menuItem, $quantity=defaultQuantityDish) {
        $this->menuItem = $menuItem;
        $this->name = 'cheese';
        $this->mesure = new DishMesure();
        $this->quantity = $quantity;
        $this->price = cheesePrice;
    }

}