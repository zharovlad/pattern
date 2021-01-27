<?php

include_once 'IBridgeShawarma.php';

class BigSize extends IBridgeShawarma {

    public function printSize() {
        echo 'big size <br/>';
    }

    public function printCookingTime() {
        echo 'cooking time is 15 minutes <br/>';
    }

    public function addMushrooms() {
        echo '3 mushrooms is added <br/>';
    }
}