<?php   namespace app\FormHero\Form\Select;

class Option {
    public function  __construct(public string $value, public string $text, public bool $selected = false) {

    }
}