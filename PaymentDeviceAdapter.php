<?php
include_once 'PaymentDeviceProxy.php';
include_once 'PaymentDeviceinDollars.php';
const course = 75;

class PaymentDeviceAdapter extends PaymentDeviceProxy {
    private $payment;

    public function __construct($paymentDevice, $payment) {
        parent::__construct($paymentDevice);
        $this->payment = $payment;
    }

    public function doPayment($sum=null) {
        $result = $this->paymentDevice->doPayment($this->payment->getSum() * course);
        $result .= $this->checkPayment($this->payment->getSum() * course);
        return $result;
    }

}