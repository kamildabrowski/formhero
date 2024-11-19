<?php namespace FormHero\Form\Ext\Tags\Select;

trait TagsSelectTrait {
    private TagsSelect $classes;
    private function ClassesInit():void {
        if(empty($this->classes)) {
            $this->classes = new TagsSelect($this);
        }
    }
    public function Classes():TagsSelect {
        $this->ClassesInit();
        return $this->classes;
    }
}