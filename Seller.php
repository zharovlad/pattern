<?php

include_once 'ICombo.php';
include_once 'Drink.php';
include_once 'Dish.php';
include_once 'PPepperoni.php';
include_once 'Shawarma.php';
include_once 'BigSize.php';


class Seller {
    private $combo;

    public function setCombo($combo) {
        $this->combo = $combo;
    }

    public function getParty() {
        $this->combo->newCombo();
        $this->combo->addPizza(new PPepperoni());
        $this->combo->addBurger(new Dish('Party burger', 500, 1500));
        $this->combo->addDrink(new Drink('Big cola', 300, 5000));
        return $this->combo->getDinnerList();
    }

    public function getSolo() {
        $this->combo->newCombo();
        $this->combo->addShawarma(new Shawarma(new BigSize(), 'Shawarma'));
        $this->combo->addDrink(new Drink('Water', 30, 330));
        return $this->combo->getDinnerList();
    }

    public function getForKids() {
        $this->combo->newCombo();
        $this->combo->addBurger(new Dish('Cheeseburger', 100, 200));
        $this->combo->addDrink(new Drink('Juice', 70, 330));
        return $this->combo->getDinnerList();
    }

}