<?php namespace FormHero\Form\Input;

use FormHero\Form;
use FormHero\Form\Ext\Classes\Input\ClassesInputTrait;
use FormHero\Form\Ext\Datas\Input\DatasInputTrait;
use FormHero\Form\Ext\Filters\Filters;
use FormHero\Form\Ext\Tags\Input\TagsInputTrait;

use FormHero\Form\FormBasic;
use FormHero\Form\Input\Type\Type;
use FormHero\Form\ElementHelper;

class Input implements ElementHelper
{
    use ClassesInputTrait;
    use DatasInputTrait;
    use TagsInputTrait;
    private Basic $basic;
    private Type $type;

    public function __construct(private Form $form,
                                private Filters $filters = new Filters(),
                                public \ArrayIterator $iterator = new \ArrayIterator()
    )
    {
        $this->basic = new Basic($this);
        $this->type = new Type($this);
    }

    public function Basic():Basic {
        return $this->basic;
    }
    private string $val;
    public function value(string $val): static
    {
        $this->val = $val;
        return $this;
    }

    public function Type(): Type
    {
        return $this->type;
    }

    public function callBefore($fnc)
    {
        return $fnc($this);
    }

    public function callAfter($fnc)
    {
        return $fnc($this);
    }

    public function rForm():Form {
        return $this->form;
    }

}