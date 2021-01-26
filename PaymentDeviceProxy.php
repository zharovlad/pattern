<?php
include_once 'IPaymentDevice.php';
include_once 'PaymentDevice.php';

class PaymentDeviceProxy extends IPaymentDevice {
    private $paymentDevice;
    public function __construct() {
        $this->paymentDevice = new PaymentDevice();
    }

    public function doPayment($sum) {
        $result = $this->paymentDevice->doPayment($sum);
        if ($sum > 1000) {
            $result .= $this->needPinCode();
        }

        return $result;
    }

    public function needPinCode() {
        // Здесь можно реализовать функционал запрашивания пинкода
        return 'Pin-code is needed. ';
    }

}