<?php namespace FormHero\Form;

use FormHero\Helpers\Element as ElementHelper;
use FormHero\Helpers\View as ViewHelper;
use FormHero\Form\Select\SelectOptions as SelectOptions;

class Select implements ElementHelper
{

    public function __construct(private $id, private SelectOptions $options = new SelectOptions(), private \ArrayIterator $data = new \ArrayIterator(), private \ArrayIterator $class = new \ArrayIterator())
    {

    }

    public function Options()
    {
        return $this->options = new SelectOptions();
    }

    public function setData(array $data)
    {
        $this->data = new \ArrayIterator($data);
    }

    public function setClass(array $class)
    {
        $this->class = new \ArrayIterator($class);;
    }

    public function render(): ViewHelper
    {
        return new ViewHelper($this);
    }

}