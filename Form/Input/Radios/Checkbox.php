<?php namespace FormHero\Form\Input\Radios;

use FormHero\Helpers\Input;
use FormHero\Helpers\Type;

class Checkbox extends Input
{

    public function __construct() {
        parent::__construct(...func_get_args());
        $this->TypeSet(Type::CHECKBOX);
    }


}