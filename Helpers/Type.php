<?php namespace FormHero\Helpers;

class Type {

    CONST TEXT = 'text';
    CONST TEXTAREA = 'textarea';
    CONST SELECT = 'select';
    CONST TELEFON = 'tel';
    CONST URL = 'url';
    CONST DATE = 'date';
    CONST DATETIME = 'datetime';
    CONST DATETIMETZ = 'datetimetz';
    CONST DATETIMETZZ = 'datetimetztz';
    CONST DATETIMETZZZ = 'datetimetztztz';

    CONST SUBMIT = 'submit';

    static public function getSubmit() {
        return static::SUBMIT;
    }


}