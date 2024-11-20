<?php namespace FormHero;

use FormHero\Form\Input\Input;
use FormHero\Helpers\FormReaderDTO;
use FormHero\Setting\Setting as Setting;
use FormHero\Views\View;

class Form {

    private $i = 0;
    public function __construct(public Setting $setting = new Setting(), public \ArrayIterator $iterator = new \ArrayIterator(), public View $view = new View()) {
        $view->setForm($this);
        if(!empty($iterator)) {
            $this->i = count($iterator);
        }
    }
    public function lastItem() {
        return $this->iterator[$this->iterator->count() - 1];
    }
    public function select($id = null): Form\Select\Select {
        $select = new Form\Select\Select($this);
        $this->iterator->append($select);
        return $select;
    }
    public function input(): Input {
        $input = new Form\Input\Input($this);
        $this->iterator->append($input);
        return $input;
    }

    public function formSubmit($func):mixed {
        return $func(new FormReaderDTO($this));
    }
    public function __toString():string {
        return $this->view;
    }
}