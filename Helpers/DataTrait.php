<?php namespace FormHero\Helpers;


use FormHero\Helpers\Data as Data;


trait DataTrait {

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
            $this->data->append(new Data($key, $value));
        }
        return $this;
    }
    public function DataReset(): static
    {
        $this->data = new \ArrayIterator();
        return $this;
    }
}