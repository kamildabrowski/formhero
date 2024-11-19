<?php namespace FormHero\Form\Ext\Datas\Textarea;

use FormHero\Form\Ext\Datas\Textarea\DatasTextarea;

trait DatasTextareaTrait {
    private DatasTextarea $classes;
    private function ClassesInit():void {
        if(empty($this->classes)) {
            $this->classes = new DatasTextarea($this);
        }
    }
    public function Classes():DatasTextarea {
        $this->ClassesInit();
        return $this->classes;
    }
}