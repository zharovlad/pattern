<?php

include_once 'Cook.php';
include_once 'ICommand.php';


class CookingPizza extends ICommand {
    public function execute(){
        $this->cook->cookPizza();
    }
}