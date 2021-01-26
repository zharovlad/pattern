<?php
include_once 'IPaymentDevice.php';

class PaymentDevice extends IPaymentDevice {
    public static $idPayment = 0;

    public function __construct() {

    }

    public function doPayment($sum) {
        self::$idPayment += 1;
        return 'Payment #' . strval(self::$idPayment) . ' on sum ' . strval($sum) . ' is done. ';
    }

}