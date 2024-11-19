<?php namespace FormHero\Form\Ext\Classes\Select;

trait ClassesSelectTrait {
    private ClassesSelect $classes;
    private function ClassesInit():void {
        if(empty($this->classes)) {
            $this->classes = new ClassesSelect($this);
        }
    }
    public function Classes():ClassesSelect {
        $this->ClassesInit();
        return $this->classes;
    }
}