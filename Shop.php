<?php 

include_once 'IObserver.php';

class Shop extends IObserver {
    public function sendNotification($message='SALE!!!') {
        
        foreach($this->customers as $customer) {
            $customer->setNotification($message);
        }

        foreach($this->workers as $seller) {
            $seller->setNotification($message);
        }
    }
}