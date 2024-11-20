<?php namespace FormHero\Form\Select;

use FormHero\Form;
use FormHero\Form\Ext\Filters\Filters;
use FormHero\Form\FormBasic;
use FormHero\Form\Select\Option as Option;
use FormHero\Helpers\Element as ElementHelper;

use FormHero\Form\Ext\Classes\Select\ClassesSelectTrait;
use FormHero\Form\Ext\Datas\Select\DatasSelectTrait;
use FormHero\Form\Ext\Tags\Select\TagsSelectTrait;

class Select implements ElementHelper
{
    use ClassesSelectTrait;
    use DatasSelectTrait;
    use TagsSelectTrait;

    public function __construct(
        private Form $form,
        public FormBasic $basic = new FormBasic(),
        private Filters $filters = new Filters(),
        public \ArrayIterator $iterator = new \ArrayIterator()
    )
    {
    }

    private function lastItem() {
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