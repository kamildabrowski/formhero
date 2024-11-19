<?php namespace FormHero\Form\Ext\Tags\Select;

use FormHero\Form\Ext\Tags\Tags;
use FormHero\Form\Ext\Tags\TagsInterface;
use FormHero\Form\Select\Select;

class TagsSelect extends Tags implements TagsInterface {
    public function __construct(private Select $input) {
        parent::__construct();
    }
    public function rInput():Select {
        return $this->input;
    }
}