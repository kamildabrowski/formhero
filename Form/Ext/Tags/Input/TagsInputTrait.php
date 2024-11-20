<?php namespace FormHero\Form\Ext\Tags\Input;

trait TagsInputTrait {
    private TagsInput $tags;
    private function TagsInit():void {
        if(empty($this->tags)) {
            $this->tags = new TagsInput($this);
        }
    }
    public function Tags():TagsInput {
        $this->TagsInit();
        return $this->tags;
    }
}