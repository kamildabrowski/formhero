<?php namespace src\FormHero\Views;

interface ViewInterface {

    public function getView(): string;
    public function getPath(): string;
}