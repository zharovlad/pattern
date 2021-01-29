<?php

include_once 'OffState.php';
include_once 'OnState.php';
include_once 'WarmedUpState.php';
include_once 'CookingState.php';


class Cook {
    private $current;
    private $offState;
    private $onState;
    private $warmedState;
    private $cookingState;

    public function __construct() {
        $this->offState = new OffState($this);
        $this->onState = new OnState($this);
        $this->warmedState = new WarmedUpState($this);
        $this->cookingState = new CookingState($this);
        $this->current = $this->offState;
    }

    public function offStove() {
        $this->current->turnOff();
    }

    public function onStove() {
        $this->current->turnOn();
    }

    public function cooking() {
        $this->current->tryToCooking();
    }

    public function stopCooking() {
        $this->current->tryToStopCooking();
    }

    public function getOnState() {
        return $this->onState;
    }

    public function getOffState() {
        return $this->offState;
    }

    public function getWarmedState() { 
        return $this->warmedState;
    }

    public function getCookingState() {
        return $this->cookingState;
    }

    public function setState($state) {
        $this->current = $state;
    }
}