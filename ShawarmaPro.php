<?php

include_once 'Shawarma.php';


class ShawarmaPro extends Shawarma {
    public function __construct($type, $name='shawarma') {
        parent::__construct($type, $name);
    }

    public function addComponent() {
        $this->type->addMushrooms();
    }
}