<?php namespace FormHero\Form\Ext\Classes;

abstract class Classes implements ClassesInterface {
    private \ArrayIterator $class;
    public function __construct() {
        $this->class = new \ArrayIterator();
    }

    public function add(string|array $class): static
    {
        if(is_array($class)) {
            array_map(fn($o)=>$this->add($o), $class);
            return $this;
        }
        $this->class->append($class);
        return $this;
    }
    public function remove(int|array $class):static {
        if(is_array($class)) {
            array_map(fn($o)=>$this->remove($o), $class);
            return $this;
        }
        $this->class->offsetUnset($class);
        return $this;
    }

    public function set(\ArrayIterator $class): static
    {
        $this->class = $class;
        return $this;
    }
    public function reset(): static {
        $this->class = new \ArrayIterator();
        return $this;
    }
   public function get():\ArrayIterator {
        return $this->class;
   }


}