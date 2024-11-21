<?php namespace FormHero\Form;


abstract class FormBasic {

    public function getName() {
        return $this->name;
    }
    public function getId() {
        return $this->id;
    }
    public function getLabel() {
        return $this->label;
    }
    public function getPlaceholder() {
        return $this->placeholder;
    }
    public function setName(string $name):self {
        $this->name = $name;
        return $this;
    }
    public function setId(string $id):self {
        $this->id = $id;
        return $this;
    }
    public function setLabel(string $label):self {
        $this->label = $label;
        return $this;
    }
    public function setPlaceholder(string $placeholder):self {
        $this->placeholder = $placeholder;
        return $this;
    }

}