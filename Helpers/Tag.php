<?php namespace FormHero\Helpers;

class Tag {

    public function __construct(public string $key, public string $value) {

    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return Tag::filterKey($this->key).'="'.str_replace('"', '“', $this->value).'"';
    }

    static public function filterKey(string $key): string {
        return preg_replace('#([^a-z0-9\-_]+)#iu', '', strtolower($key));
    }

}