<?php namespace FormHero\Form;

class FormBasic {

    public function __construct(private string $name = '', private string $id = '', private string $label = '', private string $placeholder = '') {

    }
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
    public function setName($name) {
        $this->name = $name;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setLabel($label) {
        $this->label = $label;
    }
    public function setPlaceholder($placeholder) {
        $this->placeholder = $placeholder;
    }

}