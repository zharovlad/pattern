<?php

include_once 'ISubscribers.php';

class Customer extends ISubscribers {
    public function setNotification($notification) {
        $this->notification = 'Dear customer. ' . $notification;
    }
}