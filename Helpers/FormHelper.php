<?php namespace FormHero\Helpers;

class FormHelper {
    CONST string METHOD_POST = 'POST';
    CONST string METHOD_GET = 'GET';
    CONST string METHOD_PUT = 'PUT';
    CONST string METHOD_DELETE = 'DELETE';
    CONST string METHOD_PATCH = 'PATCH';
    CONST string METHOD_HEAD = 'HEAD';
    CONST string METHOD_OPTIONS = 'OPTIONS';
    CONST string METHOD_TRACE = 'TRACE';
    CONST string METHOD_CONNECT = 'CONNECT';

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