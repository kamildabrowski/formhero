<?php namespace FormHero\Form\Ext\Filters\Filter\Required;


trait RequiredTrait {
    private Required $required;
    private function initRequired() {
        if(!isset($this->required)) {
            $this->required = new Required();
        }
    }
    public function required():Required {
        $this->initRequired();
        return $this->required;
    }
}