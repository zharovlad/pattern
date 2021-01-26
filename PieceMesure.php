<?php
include_once 'IMesure.php';
const defaultQuantityPieces = 5; // количество штук (льда) по умолчанию

class PieceMesure extends IMesure {
    public function getMesure() {
        return 'pieces';
    }
}