<?php

// простая фабрика

include_once 'SFPepperoni.php';
include_once 'SFMargaret.php';
include_once 'SFSpicy.php';


class SFPizza {
    protected $name;
    protected $size;
    protected $components;


    public function printInfo() {
        echo $this->name . ' ' . $this->size . ' ' . $this->components . '<br/>';
    }

    public function createPizza($name, $size) {
        $pizza = null;
        if ($name === 'Pepperoni') {
            $pizza = new SFPepperoni($size);
        }
        elseif ($name === 'Margaret') {
            $pizza = new SFMargaret($size);
        }
        elseif ($name === 'Spicy') {
            $pizza = new SFSpicy($size);
        }
        return $pizza;
    }
}