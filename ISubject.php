<?php

include_once 'Seller.php';
include_once 'Customer.php';

class ISubject {
    protected $customers = array();
    protected $workers = array();

    public function onlyForWorkers($message) {
        foreach($this->workers as $worker) {
            $worker->setNotification($message);
        }
    }

    public function onlyForCustomers($message) {
        foreach($this->customers as $customer) {
            $customer->setNotification($message);
        }
    }

    public function addCustomer($customer=null){
        if ($customer === null) {
            $customer = new Customer();
        }
        $this->customers[] = $customer;
    }

    public function addSeller($seller=null){
        if ($seller === null) {
            $seller = new Seller();
        }
        $this->workers[] = $seller;
    }

    public function printNotifications() {
        foreach($this->customers as $customer) {
            $customer->printNotification();
        }

        foreach($this->workers as $seller) {
            $seller->printNotification();
        }
    }
}