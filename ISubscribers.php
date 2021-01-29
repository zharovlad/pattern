<?php

class ISubscribers {
    protected $notification;

    public function setNotification($notification){} 
    public function printNotification() {
        echo $this->notification . '<br/>';
    }
}