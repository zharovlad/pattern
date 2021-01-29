<?php

include_once 'Cook.php';
include_once 'StoveState.php';


class CookingState extends StoveState {
    public function __construct($cook) {
        parent::__construct($cook);
    }
    public function turnOff() {
        echo 'Dish is cooking now! Can\'t do it now!<br/>';
    }
    public function turnOn() {
        echo 'Stove already on and dish is cooking now!<br/>';
    }
    public function tryToCooking() {
        echo 'Dish already cooking!<br/>';
    }
    public function tryToStopCooking() {
        echo 'Great dish! Cooking is over!<br/>';
        $this->cook->setState($this->cook->getWarmedState());
    }
}