<?php namespace FormHero\Form;

use FormHero\Form\Radios\Radio as Radio;

class Radios {
    public function __construct(public array $radios = []) {

    }
    public function setRadio(... $args):Radio {
        return $this->radios[] = new Radio(...$args);
    }
    public function getOptions():\ArrayIterator {
        return new \ArrayIterator($this->radios);
    }

    public function setOptions(array $options, array $selected = []):void {
        foreach($options as $key=>$option):
            if($option instanceof Radio):
                $this->radios[] = $option;
            else:
                if(is_array($option)) {
                    $this->radios[$key] = new Radio(...$option);
                } else {
                    $this->radios[$key] = new Radio();
                }
            endif;
        endforeach;
    }
    public function resetRadios():void {
        $this->radios = [];
    }
}