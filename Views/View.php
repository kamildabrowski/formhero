<?php namespace src\FormHero\Views;

class View {
    public function __construct(... $args) {



    }
    static public function __new(... $args) {
        return new self($args);
    }



}