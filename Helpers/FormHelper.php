<?php namespace FormHero\Helpers;

class FormHelper {
    CONST METHOD_POST = 'POST';
    CONST METHOD_GET = 'GET';
    CONST METHOD_PUT = 'PUT';
    CONST METHOD_DELETE = 'DELETE';
    CONST METHOD_PATCH = 'PATCH';
    CONST METHOD_HEAD = 'HEAD';
    CONST METHOD_OPTIONS = 'OPTIONS';
    CONST METHOD_TRACE = 'TRACE';
    CONST METHOD_CONNECT = 'CONNECT';

    static public function getMethodPost() {
        return self::METHOD_POST;
    }
    static public function getMethodGet() {
        return self::METHOD_GET;
    }
    static public function getMethodPut() {
        return self::METHOD_PUT;
    }
    static public function getMethodDelete() {
        return self::METHOD_DELETE;
    }
    static public function getMethodPatch() {
        return self::METHOD_PATCH;
    }
    static public function getMethodHead() {
        return self::METHOD_HEAD;
    }
    static public function getMethodOptions() {
        return self::METHOD_OPTIONS;
    }
    static public function getMethodConnect() {
        return self::METHOD_CONNECT;
    }
}