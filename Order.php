<?php

class Order {
    public $orderList = array();

    public function printOrderList() {
        echo 'Order parts: <br/>';
        foreach ($this->orderList as $part)
            echo $part->getInfo();
        echo '<br/><br/>';
    }
}