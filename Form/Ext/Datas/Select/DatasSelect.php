<?php namespace FormHero\Form\Ext\Datas\Select;

use FormHero\Form\Ext\Datas\Datas;
use FormHero\Form\Ext\Datas\DatasInterface;
use FormHero\Form\Select\Select;

class DatasSelect extends Datas implements DatasInterface {
    public function __construct(private Select $input) {
        parent::__construct();
    }
    public function rInput():Select {
        return $this->input;
    }
}