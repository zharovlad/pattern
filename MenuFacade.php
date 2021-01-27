<?php

include_once 'IMenuItems.php';


class MenuFacade {
    public $composite;
    public $listMenu;

    public function setComposite($composite) {
        $this->composite = $composite;
    }

    public function add($object) {
        $this->composite->add($object);
        $this->listMenu[] = $object;
    }

}