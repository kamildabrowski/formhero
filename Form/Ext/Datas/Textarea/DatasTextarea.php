<?php namespace FormHero\Form\Ext\Datas\Textarea;

use FormHero\Form\Ext\Datas\Datas;
use FormHero\Form\Ext\Datas\DatasInterface;
use FormHero\Form\Textarea\Textarea;

class DatasTextarea extends Datas implements DatasInterface {
    public function __construct(private Textarea $input) {
        parent::__construct();
    }
    public function rInput():Textarea {
        return $this->input;
    }
}