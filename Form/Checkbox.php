<?php namespace app\FormHero\Form;

use app\FormHero\Helpers\Element as ElementHelper;
use app\FormHero\Helpers\View as ViewHelper;
class Checkbox implements ElementHelper{

    public function __construct(private $id, private $options = [], private $checked = null, private $data = [], private $class = []) {

    }
    public function setOptions(array $options) {
        $this->options = $options;
    }
    public function setChecked($selected) {
        $this->selected = $selected;
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