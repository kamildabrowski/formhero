<?php namespace FormHero\Views;

use FormHero\Form as Form;
use FormHero\Views\MyView\MyView;

class View {

    public Form $form;
    public function __construct() {

    }

    public function setForm(Form $form):void {
        $this->form = $form;
    }

    public function getForm():Form {
        return $this->form;
    }

    public function render():string {
        $html = '';


        return $html;
    }
    public function __toString():string {
        return $this->render();
    }

}