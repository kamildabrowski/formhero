<?php namespace FormHero\Form\Input\Type;

use FormHero\Form\Input\Input;

class Type {

    public function __construct(private Input $input, private TypeInterface $type = new TypeText()) {

    }
    public function rInput():Input {
        return $this->input;
    }
    public function setType(TypeInterface $type):static {
        $this->type = $type;
        return $this;
    }
    public function getType(): TypeInterface {
        return $this->type;
    }


    public function Text():static {
        $this->type = new TypeText();
        return $this;
    }
}