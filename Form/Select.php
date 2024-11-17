<?php namespace FormHero\Form;

use Formhero\Helpers\Element as ElementHelper;
use FormHero\Form\Select\Option as Option;

use FormHero\Helpers\ClassTrait;
use FormHero\Helpers\DataTrait;
use FormHero\Helpers\TagTrait;

class Select implements ElementHelper
{
    use DataTrait;
    use TagTrait;
    use ClassTrait;
    public function __construct(
        private string $name = '',
        private string $id = '',
        private bool $disabled = false,
        private bool $required = false,
        public \ArrayIterator $iterator = new \ArrayIterator()
    )
    {

    }
    public  function setDisabled(bool $disabled) {
        $this->disabled = $disabled;
    }
    public  function setRequired(bool $required) {
        $this->required = $required;
    }
    public function lastItem() {
        return $this->iterator[$this->iterator->count() - 1];
    }
    public function addOption(string $value, string $text, bool $selected = false):Option {
        $this->iterator->append(new Option($value, $text, $selected));
        return $this->lastItem();
    }
    public function setOption(string $value, string $text, bool $selected = false):static {
        $this->iterator->append(new Option($value, $text, $selected));
        return $this;
    }
    public function getOptions():\ArrayIterator {
        return $this->iterator;
    }

}