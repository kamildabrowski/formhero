<?php namespace FormHero\Form;

use FormHero\Helpers\Element as ElementHelper;
use FormHero\Helpers\View as ViewHelper;
class Radio implements ElementHelper{

    public function __construct(private $id, private $value = '', private $data = [], private $class = []) {

    }
    public function setValue($data) {
        $this->value = $value;
    }
    public function setData($data) {
        $this->data = $data;
    }
    public function setClass($class) {
        $this->class = $class;
    }
    public function render():ViewHelper {
        return new ViewHelper($this);
    }

}