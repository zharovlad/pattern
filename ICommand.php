<?php

include_once 'Cook.php';

class ICommand {
    protected $cook;

    public function setCook($cook) {
        $this->cook = $cook;
    }

    public function execute(){}
} 