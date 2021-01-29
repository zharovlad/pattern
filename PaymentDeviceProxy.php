<?php
include_once 'IPaymentDevice.php';
include_once 'PaymentDevice.php';

class PaymentDeviceProxy extends IPaymentDevice {
    protected $paymentDevice;
    public function __construct($paymentDevice) {
        $this->paymentDevice = $paymentDevice;
    }

    protected function checkPayment($sum) {
        $result = '';
        if ($sum > 1000) {
            $result = 'Pin-code is needed.';
        }
        return $result;
    } 

    public function doPayment($sum) {
        $result = $this->paymentDevice->doPayment($sum);
        $result .= $this->checkPayment($sum);
        return $result;
    }

}