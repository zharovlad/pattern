<?php

include_once 'Cook.php';
include_once 'ICommand.php';


class CookingBurger extends ICommand {
    public function execute(){
        $this->cook->cookBurger();
    }
}