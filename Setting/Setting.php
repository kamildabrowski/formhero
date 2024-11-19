<?php namespace FormHero\Setting;

use FormHero\Helpers\ClassTrait;
use FormHero\Helpers\DataTrait;
use FormHero\Helpers\FormHelper as FormHelper;
use FormHero\Helpers\TagTrait;

class Setting {

    use DataTrait;
    use TagTrait;
    use ClassTrait;
    public function __construct(
        public bool $autofill = false,
        public string $method = FormHelper::METHOD_GET,
        public bool $multifile = false,
    ) {

    }


}