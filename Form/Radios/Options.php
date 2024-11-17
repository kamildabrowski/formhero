<?php namespace FormHero\Form\Radios;

use FormHero\Form\Text;
use FormHero\Helpers\Type;

class Options extends Text {

    public function  __construct() {
        parent::__construct(...func_get_args());
        $this->TypeSet(Type::RADIO);
    }
    public bool $selected = false;
    public function setSelected(bool $selected): Options {
        $this->selected = $selected;
        return $this;
    }

}