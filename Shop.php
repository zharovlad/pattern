<?php 

include_once 'ISubject.php';

class Shop extends ISubject {
    public function sendNotification($message='SALE!!!') {
        
        foreach($this->customers as $customer) {
            $customer->setNotification($message);
        }

        foreach($this->workers as $seller) {
            $seller->setNotification($message);
        }
    }
}