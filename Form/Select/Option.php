<?php   namespace FormHero\Form\Select;


use FormHero\Helpers\DataTrait;
use FormHero\Helpers\TagTrait;

class Option {

    use DataTrait;
    use TagTrait;
    public function  __construct(
        public string $value,
        public string $text,
        public bool $selected = false
    ) {

    }

}