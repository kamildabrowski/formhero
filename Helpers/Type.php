<?php namespace FormHero\Helpers;

class Type {
    CONST string CHECKBOX = 'checkbox';
    CONST string RADIO = 'radio';
    CONST string TEXT = 'text';
    CONST string TEXTAREA = 'textarea';
    CONST string SELECT = 'select';
    CONST string TELEFON = 'tel';
    CONST string URL = 'url';
    CONST string DATE = 'date';
    CONST string DATETIME = 'datetime';
    CONST string DATETIMETZ = 'datetimetz';
    CONST string DATETIMETZZ = 'datetimetztz';
    CONST string DATETIMETZZZ = 'datetimetztztz';

    CONST SUBMIT = 'submit';

    static public function getSubmit() {
        return static::SUBMIT;
    }


}