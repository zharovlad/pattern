<?php

class IAFFilling {
    protected $components;
    protected $cost;

    public function setComponents($components) {
        $this->name = $components;
    }

    public function setCost($cost) {
        $this->cost = $cost;
    }

    public function getCost() {
        return $this->cost;
    }
    
    public function getComponents() {
        return $this->components;
    }
}