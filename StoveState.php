<?php

include_once 'Cook.php';

class StoveState {
    protected $cook;
    public function __construct($cook) {
        $this->cook = $cook;
    }
    public function turnOff(){}
    public function turnOn(){}
    public function tryToCooking(){}
    public function tryToStopCooking(){}
}