<?php

class IAFDough {
    protected $name;
    protected $cost;

    public function setName($name) {
        $this->name = $name;
    }

    public function setCost($cost) {
        $this->cost = $cost;
    }

    public function getCost() {
        return $this->cost;
    }

    public function getName() {
        return $this->name;
    }
}