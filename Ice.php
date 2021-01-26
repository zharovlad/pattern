<?php
include_once 'AdditionalComponent.php';
include_once 'PieceMesure.php';
const free = 0;


class Ice extends AdditionalComponent {

    public function __construct($menuItem, $quantity=defaultQuantityPieces) {
        $this->menuItem = $menuItem;
        $this->name = 'ice';
        $this->mesure = new PieceMesure();
        $this->quantity = $quantity;
        $this->price = free;
    }

}