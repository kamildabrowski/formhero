<?php namespace FormHero\Form\Ext\Datas\Input;

use FormHero\Form\Ext\Datas\Datas;
use FormHero\Form\Ext\Datas\DatasInterface;
use FormHero\Form\Input\Input;

class DatasInput extends Datas implements DatasInterface {
    public function __construct(private Input $input) {
        parent::__construct();
    }
    public function rInput():Input {
        return $this->input;
    }
}