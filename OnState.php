<?php

include_once 'Cook.php';
include_once 'StoveState.php';


class OnState extends StoveState {
    public function __construct($cook) {
        parent::__construct($cook);
    }
    public function turnOff() {
        echo 'Stove is off now!<br/>';
        $this->cook->setState($this->cook->getOffState());
    }
    public function turnOn() {
        echo 'Stove already on<br/>';
        $this->cook->setState($this->cook->getWarmedState());
    }
    public function tryToCooking() {
        echo 'Stove is not warmed up yet<br/>';
        $this->cook->setState($this->cook->getWarmedState());
    }
    public function tryToStopCooking() {
        echo 'Nothing is cooking because stove is not warmed up yet<br/>';
    }
}