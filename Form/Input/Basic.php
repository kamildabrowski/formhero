<?php namespace FormHero\Form\Input;

use FormHero\Form\FormBasic;

class Basic extends FormBasic
{
    public function __construct(private Input $element) {

    }
    public function return():Input {
        return $this->element;
    }
}