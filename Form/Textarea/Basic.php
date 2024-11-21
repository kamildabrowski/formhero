<?php namespace FormHero\Form\Textarea;

use FormHero\Form\FormBasic;

class Basic extends FormBasic
{
    public function __construct(private Textarea $element) {

    }
    public function return():Textarea {
        return $this->element;
    }
}