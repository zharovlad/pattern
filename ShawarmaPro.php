<?php

include_once 'Shawarma.php';


class ShawarmaPro extends Shawarma {
    public function __construct($type) {
        parent::__construct($type);
    }

    public function addComponent() {
        $this->type->addMushrooms();
    }
}