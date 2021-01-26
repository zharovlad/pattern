<?php
include_once 'AdditionalComponent.php';
const saucePrice = 30;


class Sauce extends AdditionalComponent {

    public function __construct($menuItem, $quantity=defaultQuantityDrink) {
        $this->menuItem = $menuItem;
        $this->name = 'sauce';
        $this->mesure = new DrinkMesure();
        $this->quantity = $quantity;
        $this->price = saucePrice;
    }

}