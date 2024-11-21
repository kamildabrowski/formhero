<?php namespace FormHero;

use FormHero\Form as Form;
use FormHero\Views\View;

class Example {
    public static function run() {

        echo 'works';

        $form = new Form();
        $form->input()->
        Type()->Text()->rInput()->
        Datas()->DataAdd('test', 'test')->rInput()->
        Tags()->add('data-id', 'dadasd')->rInput()->
        Filters()->required()->disabled()->rInput()->
        Basic()->setName('test')->return()->value('test')->rForm()->formSubmit(function(Form $form) {

            FormHero\Plugins\MySqlAutoSave('table_name', $form);

        });

        //Example not working idea!
        foreach($form->iterator() as $value) {
            View::render($value, function($obj) {
                return ['test'=>1];
            });
        }

    }
}