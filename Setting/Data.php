<?php namespace FormHero\Setting;

use FormHero\Setting\Setting as Setting;

class Data {
    public function __construct(protected Setting $setting) {

    }

    public $name;
    public function setName(string $name):self {
        $this->name = $name;
        return $this;
    }

    public FormHero\Interfaces\ViewInterface $view;
    public function setView(FormHero\Interfaces\ViewInterface $view):self {
        $this->view = $view;
        return $this;
    }


}