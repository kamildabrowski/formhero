<?php namespace app\FormHero;

use app\FormHero\Helpers\Adding as Adding;
use app\FormHero\Helpers\Element as ElementHelper;

class Form {

    private Adding $adding;
    public function __construct() {
        $this->adding = new Adding;
    }
    public function getElement($id):ElementHelper {
        return $this->adding->getAddedOne($id);
    }
    public function select($id = null, ...$args):Form\Select {
        $get = new Form\Select($id);
        $this->adding->setAdded($get);
        return $get;
    }
    public function inputCheckbox($id = null):Form\Checkbox {
        $get = new Form\Checkbox($id);
        $this->adding->setAdded($get);
        return $get;
    }
    public function inputText($id = null):Form\Text {
        $get = new Form\Text($id);
        $this->adding->setAdded($get);
        return $get;
    }
    public function inputRadio($id = null):Form\Radio {
        $get = new Form\Radio($id);
        $this->adding->setAdded($get);
        return $get;
    }
    public function inputSubmit($id = null):mixed {
        return $this->inputText($id)->setType('submit');
    }
    public function formSubmit($func):mixed {
        return $func($this->adding);
    }
    public function __toString():string {
        return '';
    }
}