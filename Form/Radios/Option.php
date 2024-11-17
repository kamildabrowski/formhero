<?php namespace FormHero\Form\Radios;

use FormHero\Form\Text;
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