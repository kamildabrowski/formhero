<?php namespace FormHero\Form\Ext\Filters\Filter\Readonly2;

trait Readonly2Trait {
    private Readonly2 $readonly2;
    private function initReadonly2() {
        if(!isset($this->readonly2)) {
            $this->readonly2 = new Readonly2();
        }
    }
    public function readonly2():Readonly2 {
        $this->initReadonly2();
        return $this->readonly2;
    }
}