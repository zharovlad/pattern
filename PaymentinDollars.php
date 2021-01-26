<?php


class PaymentinDollars {
    private $sumInDollars;

    public function __construct($sum) {
        $this->sumInDollars = $sum;
    }

    public function getSum() {
        return $this->sumInDollars;
    }
}