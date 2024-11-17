<?php namespace FormHero;

use FormHero\Setting\Setting as Setting;
use FormHero\Views\View;

class Form {

    public function __construct(public Setting $setting = new Setting(), public \ArrayIterator $iterator = new \ArrayIterator(), View $view = new View()) {

    }
    public function lastItem() {
        return $this->iterator[$this->iterator->count() - 1];
    }
    public function select($id = null):Form\Select {
        $this->iterator->append(new Form\Select($id));
        return $this->lastItem();
    }
    public function inputCheckbox($id = null):Form\Checkbox {
        $this->iterator->append(new Form\Checkbox($id));
        return $this->lastItem();
    }
    public function inputText($id = null):Form\Text {
        $this->iterator->append(new Form\Text($id));
        return $this->lastItem();
    }
    public function inputRadio($id = null):Form\Radio {
        $this->iterator->append(new Form\Radio($id));
        return $this->lastItem();
    }
    public function inputSubmit($id = null):mixed {
        $this->iterator->append(new Form\Text($id));
        return $this->lastItem()->TypeSet(\FormHero\Helpers\Type::SUBMIT);
    }
    public function formSubmit($func):mixed {
        return $func($this->iterator);
    }
    public function __toString():string {
        return '';
    }
}