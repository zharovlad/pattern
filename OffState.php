<?php

include_once 'Cook.php';
include_once 'StoveState.php';


class OffState extends StoveState {
    public function __construct($cook) {
        parent::__construct($cook);
    }
    public function turnOff() {
        echo 'Stove already off<br/>';
    }
    public function turnOn() {
        echo 'Stove is turned on now<br/>';
        $this->cook->setState($this->cook->getOnState());
    }
    public function tryToCooking() {
        echo 'Stove is not turned on<br/>';
    }
    public function tryToStopCooking() {
        echo 'Nothing is cooking because stove is turned off<br/>';
    }
}