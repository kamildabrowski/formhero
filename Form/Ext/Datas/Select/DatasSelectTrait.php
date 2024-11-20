<?php namespace FormHero\Form\Ext\Datas\Select;

trait DatasSelectTrait {
    private DatasSelect $datas;
    private function DatasInit():void {
        if(empty($this->datas)) {
            $this->datas = new DatasSelect($this);
        }
    }
    public function Datas():DatasSelect {
        $this->DatasInit();
        return $this->datas;
    }
}