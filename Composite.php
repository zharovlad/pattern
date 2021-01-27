<?php

include_once 'IMenuItem.php';

class Composite extends IMenuItem {
    private $children = array();

    public function getPrice() {
        foreach($this->children as $child) {
            echo strval($child->getPrice());
        }
    }

    public function getQuantity() {
        foreach($this->children as $child) {
            echo strval($child->getQuantity());
        }
    }

    public function getMesure() {
        foreach($this->children as $child) {
            echo strval($child->getMesure());
        };
    }

    public function getInfo() {
        foreach($this->children as $child) {
            echo strval($child->getInfo()) . '<br/>';
        }
    }

    public function add($child) {
        $this->children[] = $child;
    }

    public function removeAll() {
        foreach ($this->children as $key => $element) {
            unset($this->children[$key]);
        }
    }
}