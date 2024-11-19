<?php namespace FormHero\Form\Ext\Classes\Input;

trait ClassesInputTrait {
    private ClassesInput $classes;
    private function ClassesInit():void {
        if(empty($this->classes)) {
            $this->classes = new ClassesInput($this);
        }
    }
    public function Classes():ClassesInput {
        $this->ClassesInit();
        return $this->classes;
    }
}