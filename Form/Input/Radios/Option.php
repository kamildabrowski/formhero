<?php namespace FormHero\Form\Input\Radios;

use FormHero\Helpers\Type;

class Option extends Text {

    public function  __construct() {
        parent::__construct(...func_get_args());
        $this->TypeSet(Type::RADIO);
    }
    public bool $checked = false;
    public function setSelected(bool $checked): Option {
        $this->checked = $checked;
        return $this;
    }

}