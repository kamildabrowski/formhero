<?php namespace FormHero\Form\Select;

use FormHero\Form\FormBasic;

class Basic extends FormBasic
{
    public function __construct(private Select $element) {

    }
    public function return():Select {
        return $this->element;
    }
}