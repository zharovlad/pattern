<?php

include_once 'ISubscribers.php';
include_once 'ICommand.php';

class Customer extends ISubscribers {   
    private $command;

    public function setNotification($notification) {
        $this->notification = 'Dear customer. ' . $notification;
    }

    public function setCommand($newCommand) {
        $this->command = $newCommand;
    }

    public function executeCommand(){
        $this->command->execute();
    }
}