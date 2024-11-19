<?php namespace FormHero\Form\Input;

use FormHero\Form;
use FormHero\Form\Ext\Classes\Input\ClassesInputTrait;
use FormHero\Form\Ext\Datas\Input\DatasInputTrait;
use FormHero\Form\Ext\Tags\Input\TagsInputTrait;

use FormHero\Form\Input\Type\Type;
use FormHero\Form\ElementHelper;

class Input implements ElementHelper
{
    use ClassesInputTrait;
    use DatasInputTrait;
    use TagsInputTrait;

    public function __construct(private Form $form,
                                private string $name = '',
                                private string $id = '',
                                private string $val = '',
                                private string $placeholder = '',
                                private bool $disabled = false,
                                private bool $required = false,
                                private string $label = "")
    {
        $this->type = new Type($this);
    }

    public function placeholder(string $name): string {
        return $this->placeholder = $name;
    }

    public function value(string $val): static
    {
        $this->val = $val;
        return $this;
    }

    public function type(): Type
    {
        return $this->type;
    }

    public function id(string $id): static
    {
        $this->id = $id;
        return $this;
    }
    public function name(string $name): static
    {
        $this->name = $name;
        return $this;
    }
    public function label(string $label): static
    {
        $this->label = $label;
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

    public function rForm():Form {
        return $this->form;
    }

}