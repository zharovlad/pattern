<?php

include_once 'Order.php';

class ICombo {
    protected $orderList;

    public function getDinnerList() {
        return $this->orderList;
    }

    public function newCombo() {
        $this->orderList = new Order();
    }

    public function addDrink($drink) {
        $this->orderList->orderList[] = $drink;
    }

    public function addBurger($burger) {
        $this->orderList->orderList[] = $burger;
    }

    public function addShawarma($shawarma) {
        $this->orderList->orderList[] = $shawarma;
    }

    public function addPizza($pizza) {
        $this->orderList->orderList[] = $pizza;
    }
    

}