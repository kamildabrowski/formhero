<?php namespace FormHero\Form\Ext\Helpers;

class Boolean {
    public function __construct(bool $set = false) {

    }
    public function set(bool $set = false) {
        $this->set = $set;
    }
    public function get():bool {
        return $this->set;
    }
}