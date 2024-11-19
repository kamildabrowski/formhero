<?php namespace FormHero\Form\Ext\Datas;

use FormHero\Form\Ext\Classes\DatasInterface;
use FormHero\Form\Input\Input;

abstract class Datas implements DatasInterface {
    public function __construct() {
        $this->data = new \ArrayIterator();
    }

    public \ArrayIterator $data;
    public function DataSet(\ArrayIterator $data): static
    {
        $this->data = $data;
        return $this;
    }
    public function DataAdd($key, $value): static {
        if(empty($this->data)) {
            $this->data = new \ArrayIterator();
        } else {
            $this->data->append(new DataEntity($key, $value));
        }
        return $this;
    }
    public function DataReset(): static
    {
        $this->data = new \ArrayIterator();
        return $this;
    }



}