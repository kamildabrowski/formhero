<?php namespace FormHero\Form\Select;

class OptGroup {
    public function  __construct(
        public string $label,
        public bool $disabled = false,
        public bool $active = true
    ) {

    }

    public function setDisabled(bool $disabled) {
        $this->disabled = $disabled;
    }
    public function setLabel(string $label) {
        $this->label = $label;
    }
    public function setActive(bool $active) {
        $this->active = $active;
    }

}