<?php

abstract class IPaymentDevice {
    abstract public function doPayment($sum);
}