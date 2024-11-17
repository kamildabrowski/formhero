<?php namespace FormHero\Helpers;

use FormHero\Helpers\Tag as TagHelper;

trait TagTrait {

    public \ArrayIterator $tags;
    public function TagsAdd($key, $value): static
    {
        if(empty($this->tags)) {
            $this->tags = new \ArrayIterator();
        } else {
            $this->tags->append(new TagHelper($key, $value));
        }
        return $this;
    }
    public function TagsSet(\ArrayIterator $tags): static
    {
        $this->tags = $tags;
        return $this;
    }
    public function TagsRemove($key): static {
        if($this->tags instanceof \ArrayIterator) {
            $this->tags->offsetUnset($key);
        }
        return $this;
    }
    public function TagsRemoveAll(): static {
        $this->tags = new \ArrayIterator();
        return $this;
    }

}