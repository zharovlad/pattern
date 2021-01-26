<?php
include_once 'IPaymentDevice.php';
include_once 'PaymentDeviceinDollars.php';
const course = 75;

class PaymentDeviceAdapter extends IPaymentDevice {
    public static $idPaymentDollars = 0;
    private $device;

    public function __construct($device) {
        $this->device = $device;
    }

    public function doPayment($sum=null) {
        self::$idPaymentDollars += 1;

        return 'Payment in dollars #' . strval(self::$idPaymentDollars) . ' on sum ' . strval($this->device->getSum()) . 
        '$ (' . strval($this->device->getSum() * course) . ' RUB) is done. ';
    }

}