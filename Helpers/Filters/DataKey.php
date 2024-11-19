<?php namespace FormHero\Helpers\Filters;

class DataKey extends \FilterIterator {

    public function __construct(\Iterator $iterator) {
        parent::__construct($iterator);
    }
    public function accept() {

    }

}