<?php namespace FormHero;

use FormHero\Form\Input\Input;
use FormHero\Helpers\FormReaderDTO;
use FormHero\Setting\Setting as Setting;
use FormHero\Views\View;

class Form {

    public function __construct(public Setting $setting = new Setting(), public \ArrayIterator $iterator = new \ArrayIterator(), public View $view = new View()) {
        $view->setForm($this);
    }
    public function lastItem() {
        return $this->iterator[$this->iterator->count() - 1];
    }
    public function select($id = null): Form\Select\Select {
        $this->iterator->append(new Form\Select\Select($id));
        return $this->lastItem();
    }
    public function inputText(): Input {
        $text = new Form\Input\Input($this);
        $text->Type()->Text()->rInput()->Classes()->add('test')->rInput()->label('test')->name('test')->id('test');
        $this->iterator->append($text);
        return $text;
    }

    public function formSubmit($func):mixed {
        return $func(new FormReaderDTO($this));
    }
    public function __toString():string {
        return $this->view;
    }
}