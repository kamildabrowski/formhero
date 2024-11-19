
<?php namespace FormHero\Form\Ext\Tags\Input;

use FormHero\Form\Ext\Tags\Tags;
use FormHero\Form\Ext\Tags\TagsInterface;
use FormHero\Form\Input\Input;

class TagsInput extends Tags implements TagsInterface {
    public function __construct(private Input $input) {
        parent::__construct();
    }
    public function rInput():Input {
        return $this->input;
    }
}