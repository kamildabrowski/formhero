<?php namespace FormHero\Form\Ext\Tags\Select;

trait TagsSelectTrait {
    private TagsSelect $tags;
    private function TagsInit():void {
        if(empty($this->tags)) {
            $this->tags = new TagsSelect($this);
        }
    }
    public function Tags():TagsSelect {
        $this->TagsInit();
        return $this->tags;
    }
}