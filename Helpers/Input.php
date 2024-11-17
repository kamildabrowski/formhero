<?php namespace FormHero\Helpers;

use FormHero\Helpers\Element as ElementHelper;

class Input implements ElementHelper
{
    use DataTrait;
    use TagTrait;
    use ClassTrait;

    public function __construct(
        private string $name = '',
        private string $id = '',
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

    public function setValue(string $val): static
    {
        $this->val = $val;
        return $this;
    }

    public function TypeSet(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function setId(string $id): static
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

}