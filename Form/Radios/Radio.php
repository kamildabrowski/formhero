<?php namespace FormHero\Form\Radios;

class Radio {

    public function  __construct(public string $name, public string $value, public string $text, public string $label, public bool $selected = false) {

    }
    public function setName(string $name): Radio {
        $this->name = $name;
        return $this;
    }
    public function setValue(string $value): Radio {
        $this->value = $value;
        return $this;
    }
    public function setText(string $text): Radio {
        $this->text = $text;
        return $this;
    }
    public function setLabel(string $label): Radio {
        $this->label = $label;
        return $this;
    }
    public function setSelected(bool $selected): Radio {
        $this->selected = $selected;
        return $this;
    }

}