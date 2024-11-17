<?php namespace FormHero\Form;

use FormHero\Helpers\Input;
use FormHero\Helpers\Type;

class Text extends Input
{
   public function __construct() {
       parent::__construct(...func_get_args());
       $this->TypeSet(Type::TEXT);
   }

}