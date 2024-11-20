<?php namespace FormHero\Form\Ext\Filters;

use FormHero\Form\Ext\Filters\Filter\Disabled\DisabledTrait;
use FormHero\Form\Ext\Filters\Filter\Readonly2\Readonly2Trait;
use FormHero\Form\Ext\Filters\Filter\Required\RequiredTrait;

class Filters {

    use DisabledTrait;
    use RequiredTrait;
    use Readonly2Trait;

    public function __construct() {

    }



}