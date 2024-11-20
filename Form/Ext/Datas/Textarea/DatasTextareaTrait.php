<?php namespace FormHero\Form\Ext\Datas\Textarea;

use FormHero\Form\Ext\Datas\Textarea\DatasTextarea;

trait DatasTextareaTrait {
    private DatasTextarea $datas;
    private function DatasInit():void {
        if(empty($this->datas)) {
            $this->datas = new DatasTextarea($this);
        }
    }
    public function Classes():DatasTextarea {
        $this->DatasInit();
        return $this->datas;
    }
}