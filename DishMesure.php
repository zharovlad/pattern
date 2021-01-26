<?php
include_once 'IMesure.php';
const defaultQuantityDish = 450; // количество еды (в граммах) по умолчанию

class DishMesure extends IMesure {
    public function getMesure() {
        return 'grams';
    }
}