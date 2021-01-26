<?php
include_once 'IMenuItem.php';

class AdditionalComponent extends IMenuItem {

    protected $menuItem;

    public function __construct() {

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
        return strval($this->name) . ' ' . strval($this->menuItem->name) . ' ' . strval($this->quantity) . ' ' . strval($this->mesure->getMesure()) . '. Price is ' . strval($this->price);
    }

}