<?php namespace FormHero\Form\Ext\Classes\Textarea;

use FormHero\Form\Ext\Classes\Classes;
use FormHero\Form\Ext\Classes\ClassesInterface;
use FormHero\Form\Textarea\Textarea;

class ClassesTextarea extends Classes implements ClassesInterface {
    public function __construct(private Textarea $input) {
        parent::__construct();
    }
    public function rInput():Textarea {
        return $this->input;
    }
}