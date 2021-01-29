<?php

include_once 'Cook.php';
include_once 'StoveState.php';


class WarmedUpState extends StoveState {
    public function __construct($cook) {
        parent::__construct($cook);
    }
    public function turnOff() {
        echo 'Stove is off now!<br/>';
        $this->cook->setState($this->cook->getOffState());
    }
    public function turnOn() {
        echo 'Stove already on and warmed up<br/>';
    }
    public function tryToCooking() {
        echo 'Let\'s cooking!<br/>';
        $this->cook->setState($this->cook->getCookingState());
    }
    public function tryToStopCooking() {
        echo 'Nothing is cooking<br/>';
    }
}