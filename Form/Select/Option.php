<?php   namespace FormHero\Form\Select;


use FormHero\Helpers\DataTrait;
use FormHero\Helpers\TagTrait;

class Option {

    use DataTrait;
    use TagTrait;
    public function  __construct(
        public string $value,
        public string $text,
        public bool $selected,
        public string $disabled,
        public OptGroup $optgroup,
    ) {
        $this->disabled = false;
        $this->selected = false;
    }

    public function optGroup(string $label): OptGroup {
        if(empty($this->optgroup)) {
            $this->optgroup = new OptGroup($label);
        }
        return $this->optgroup;
    }
    public function disabled(bool $disabled): static {
        $this->disabled = $disabled;
        return $this;
    }
    public function selected(bool $selected): static {
        $this->selected = $selected;
        return $this;
    }


}