<?php namespace FormHero\Form\Ext\Filters\Filter\Disabled;

trait DisabledTrait {
    private Disabled $disabled;
    private function initDisabled() {
        if(!isset($this->disabled)) {
            $this->disabled = new Disabled();
        }
    }
    public function disabled():Disabled {
        $this->initDisabled();
        return $this->disabled;
    }
}