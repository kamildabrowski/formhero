<?php namespace FormHero\Form\Ext\Tags;

use FormHero\Form\Input\Input;

abstract class Tags implements TagsInterface {

    public \ArrayIterator $tags;
    public function add($key, $value): static
    {
        if(empty($this->tags)) {
            $this->tags = new \ArrayIterator();
        } else {
            $this->tags->append(new TagEntity($key, $value));
        }
        return $this;
    }
    public function set(\ArrayIterator $tags): static
    {
        $this->tags = $tags;
        return $this;
    }
    public function remove($key): static {
        if($this->tags instanceof \ArrayIterator) {
            $this->tags->offsetUnset($key);
        }
        return $this;
    }
    public function reset(): static {
        $this->tags = new \ArrayIterator();
        return $this;
    }



}