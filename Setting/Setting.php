<?php namespace src\FormHero\Setting;

use src\FormHero\Form;
use src\FormHero\Setting\Data as Data;

class Setting {

    public function setForm(Form $form) {
        $this->form = $form;
    }
    public function __construct(protected ?Data $data = null) {
        if(is_null($this->data)) {
            $this->data = new Data();
        }
    }
    public function Data() {
        return $this->data;
    }
    public function exception($message):void {
        throw new \Exception($message);
    }


}