<?php namespace FormHero\Form\Ext\Tags\Textarea;

use FormHero\Form\Ext\Tags\Tags;
use FormHero\Form\Ext\Tags\TagsInterface;
use FormHero\Form\Textarea\Textarea;

class TagsTextarea extends Tags implements TagsInterface {
    public function __construct(private Textarea $input) {
        parent::__construct();
    }
    public function rInput():Textarea {
        return $this->input;
    }
}