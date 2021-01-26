<?php
include_once 'IMesure.php';
const defaultQuantityDrink = 350; // количество напитка (в миллилитрах) по умолчанию

class DrinkMesure extends IMesure {
    public function getMesure() {
        return 'milliliters';
    }
}