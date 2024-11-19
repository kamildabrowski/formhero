<?php namespace FormHero\Form\Ext\Tags\Input;

trait TagsInputTrait {
    private TagsInput $classes;
    private function ClassesInit():void {
        if(empty($this->classes)) {
            $this->classes = new TagsInput($this);
        }
    }
    public function Classes():TagsInput {
        $this->ClassesInit();
        return $this->classes;
    }
}