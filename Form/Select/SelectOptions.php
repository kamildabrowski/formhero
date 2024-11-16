<?php namespace app\FormHero\Form\Select;

use app\FormHero\Form\Select\Option as Option;
class SelectOptions {

    public function __construct(public array $options = []) {

    }
    public function setOption(... $args):Option {
        return $this->options[] = new Option(...$args);
    }
    public function getOptions():\ArrayIterator {
        return new \ArrayIterator($this->options);
    }

    public function setOptions(array $options, array $selected = []):void {
        foreach($options as $key=>$option):
            if($option instanceof Option):
                $this->options[] = $option;
            else:
                if(is_array($option)) {
                    $this->options[$key] = new Option(...$option);
                } else {
                    $this->options[$key] = new Option($key, $key, $option, $selected[$key]??false);
                }
            endif;
        endforeach;
    }
    public function resetOptions():void {
        $this->options = [];
    }
}