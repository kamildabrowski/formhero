<?php namespace app\FormHero\Form;

use app\FormHero\Helpers\Element as ElementHelper;
use app\FormHero\Helpers\View as ViewHelper;
class Text implements ElementHelper{

    public function __construct(private $id, private $val = '', private $data = [], private $class = [], private $type = '', private $tags = []) {

    }
    public function setValue(string $val):Text {
        $this->val = $val;
        return $this;
    }
    public function setData(array $data):Text {
        $this->data = $data;
        return $this;
    }
    public function setClass(array $class):Text {
        $this->class = $class;
        return $this;
    }
    public function setType(string $type):Text {
        $this->type = $type;
        return $this;
    }
    public function setId(string $id):Text {
        $this->id = $id;
        return $this;
    }
    public function setTags(array $tags):Text {
        $this->tags = $tags;
        return $this;
    }
    public function callBefore($fnc) {
        return $fnc($this);
    }
    public function callAfter($fnc) {
        return $fnc($this);
    }
    public function render():ViewHelper {
        return new ViewHelper($this);
    }

}