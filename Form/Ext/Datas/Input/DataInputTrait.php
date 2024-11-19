<?php namespace FormHero\Form\Ext\Datas\Input;

trait DataInputTrait {
    private DataInput $classes;
    private function ClassesInit():void {
        if(empty($this->classes)) {
            $this->classes = new DataInput($this);
        }
    }
    public function Classes():DataInput {
        $this->ClassesInit();
        return $this->classes;
    }
}