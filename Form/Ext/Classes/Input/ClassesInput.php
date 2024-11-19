
<?php namespace FormHero\Form\Ext\Classes\Input;

use FormHero\Form\Ext\Classes\Classes;
use FormHero\Form\Ext\Classes\ClassesInterface;
use FormHero\Form\Input\Input;

class ClassesInput extends Classes implements ClassesInterface {
    public function __construct(private Input $input) {
        parent::__construct();
    }
    public function rInput():Input {
        return $this->input;
    }
}