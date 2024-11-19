<?php namespace FormHero\Form\Ext\Datas\Select;

trait DatasSelectTrait {
    private DatasSelect $classes;
    private function ClassesInit():void {
        if(empty($this->classes)) {
            $this->classes = new DatasSelect($this);
        }
    }
    public function Classes():DatasSelect {
        $this->ClassesInit();
        return $this->classes;
    }
}