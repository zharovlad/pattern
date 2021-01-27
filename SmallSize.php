<?php

include_once 'IBridgeShawarma.php';

class SmallSize extends IBridgeShawarma {

    public function printSize() {
        echo 'small size <br/>';
    }

    public function printCookingTime() {
        echo 'cooking time is 10 minutes <br/>';
    }

    public function addMushrooms() {
        echo '2 mushrooms is added <br/>';
    }
}