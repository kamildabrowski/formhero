<?php namespace src\FormHero\Setting;

use src\FormHero\Setting\Setting as Setting;

class Data {
    public function __construct(protected Setting $setting) {

    }

    public $name;
    public function setName(string $name):self {
        $this->name = $name;
        return $this;
    }

    public \src\FormHero\Interfaces\ViewInterface $view;
    public function setView(\src\FormHero\Interfaces\ViewInterface $view):self {
        $this->view = $view;
        return $this;
    }


}