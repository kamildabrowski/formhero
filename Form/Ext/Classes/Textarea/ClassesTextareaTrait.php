<?php namespace FormHero\Form\Ext\Classes\Textarea;

trait ClassesTextareaTrait {
    private ClassesTextarea $classes;
    private function ClassesInit():void {
        if(empty($this->classes)) {
            $this->classes = new ClassesTextarea($this);
        }
    }
    public function Classes():ClassesTextarea {
        $this->ClassesInit();
        return $this->classes;
    }
}