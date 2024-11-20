<?php namespace FormHero\Form\Ext\Datas\Input;

trait DatasInputTrait {
    private DatasInput $datas;
    private function DatasInit():void {
        if(empty($this->datas)) {
            $this->datas = new DatasInput($this);
        }
    }
    public function Datas():DatasInput {
        $this->DatasInit();
        return $this->datas;
    }
}