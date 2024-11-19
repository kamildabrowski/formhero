<?php namespace FormHero\Helpers;

use FormHero\Form;

class FormReaderDTO {
    public function __construct(public Form $form) {

    }

    public function getForm(): Form {
        return $this->form;
    }

    public function getItems() {
        foreach($this->form->iterator as $item) {
            yield $item;
        }
    }

}