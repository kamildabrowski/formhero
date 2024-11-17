<?php namespace FormHero\Helpers;


trait ClassTrait {

    public \ArrayIterator $class;
    public function classAdd(string $class): static
    {
        if(empty($this->class)) {
            $this->class = new \ArrayIterator();
        } else {
            $this->class->append($class);
        }
        return $this;
    }
    public function classSet(\ArrayIterator $class): static
    {
        $this->class = $class;
        return $this;
    }
    public function classSetAll(array $class): static {
        $this->class = new \ArrayIterator();
    }
    public function classExists(string $class): bool {
        return $this->class->offsetExists($class);
    }
    public function classExistsAll(array $class): bool {
        return $this->class->offsetExists($class);
    }
    public function classGet(string $class): \ArrayIterator {
        return $this->class->offsetGet($class);
    }
    public function classGetAll(array $class): \ArrayIterator {
        return $this->class->offsetGet($class);
    }
    public function classGetAllAll(array $class): \ArrayIterator {
        return $this->class->offsetGet($class);
    }

}