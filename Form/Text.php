<?php namespace FormHero\Form;

use FormHero\Helpers\ClassTrait;
use FormHero\helpers\DataTrait;
use FormHero\Helpers\Element as ElementHelper;
use FormHero\Helpers\TagTrait;
use FormHero\Helpers\View as ViewHelper;
use FormHero\Helpers\Data as Data;
use FormHero\Helpers\Tag as TagHelper;
use FormHero\helpers\Type as TypeHelper;

class Text implements ElementHelper
{
    use DataTrait;
    use TagTrait;
    use ClassTrait;

    public function __construct(
        private string $id,
        private string $val = '',
        private string $type = '',
        private string $placeholder = '',
        private bool $disabled = false,
        private bool $required = false,
        private string $label = "",
    )
    {

    }

    public function Placeholder(string $name): string {
        return $this->placeholder = $name;
    }

    public function setValue(string $val): Text
    {
        $this->val = $val;
        return $this;
    }

    public function TypeSet(string $type): Text
    {
        $this->type = $type;
        return $this;
    }

    public function setId(string $id): Text
    {
        $this->id = $id;
        return $this;
    }



    public function callBefore($fnc)
    {
        return $fnc($this);
    }

    public function callAfter($fnc)
    {
        return $fnc($this);
    }

    public function render(): ViewHelper
    {
        return new ViewHelper($this);
    }

}