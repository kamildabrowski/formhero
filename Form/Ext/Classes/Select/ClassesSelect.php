<?php namespace FormHero\Form\Ext\Classes\Select;

use FormHero\Form\Ext\Classes\Classes;
use FormHero\Form\Ext\Classes\ClassesInterface;
use FormHero\Form\Select\Select;

class ClassesSelect extends Classes implements ClassesInterface {
    public function __construct(private Select $input) {
        parent::__construct();
    }
    public function rInput():Select {
        return $this->input;
    }
}