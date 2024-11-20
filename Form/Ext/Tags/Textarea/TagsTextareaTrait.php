<?php namespace FormHero\Form\Ext\Tags\Textarea;

trait TagsTextareaTrait {
    private TagsTextarea $tags;
    private function TagsInit():void {
        if(empty($this->tags)) {
            $this->tags = new TagsTextarea($this);
        }
    }
    public function Tags():TagsTextarea {
        $this->TagsInit();
        return $this->tags;
    }
}