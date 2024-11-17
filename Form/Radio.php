<?php namespace FormHero\Form;

use FormHero\Form\Select\Option as Option;
use Formhero\Helpers\Element as ElementHelper;

class Radio implements ElementHelper
{
    public function __construct(public string $name, \ArrayIterator $iterator = new \ArrayIterator()) {

    }
    public function lastItem() {
        return $this->iterator[$this->iterator->count() - 1];
    }
    public function addOption(...$args):Option {
        $this->iterator->append(new Option($args));
        return $this->lastItem();
    }
    public function setOption(...$args):static {
        $this->iterator->append(new Option($args));
        return $this;
    }
    public function getOptions():\ArrayIterator {
        return $this->iterator;
    }

}