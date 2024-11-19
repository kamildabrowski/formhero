<?php namespace FormHero\Form\Input\Type;

class TypeText implements TypeInterface {

    CONST TYPE_TEXT = 'text';
    public function getName():string {
        return TypeText::TYPE_TEXT;
    }

}