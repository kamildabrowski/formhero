<?php   namespace FormHero\Form\Select;


class Option {
    public function  __construct(public string $value, public string $text, public bool $selected = false) {

    }
    public function setName(string $name): Option {
        $this->name = $name;
        return $this;
    }
    public function setValue(string $value): Option {
        $this->value = $value;
        return $this;
    }
    public function setText(string $text): Option {
        $this->text = $text;
        return $this;
    }
    public function setLabel(string $label): Option {
        $this->label = $label;
        return $this;
    }
    public function setSelected(bool $selected): Option {
        $this->selected = $selected;
        return $this;
    }
}