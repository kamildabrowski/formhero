<?php namespace src\FormHero\Views;

use src\FormHero\Form;

class ViewDefault implements ViewInterface  {

    public function __construct(protected Form $form) {
        $this->checkExists();
    }
    CONST DIRNAME = 'Default';
    public function getView(): string
    {
        // TODO: Implement getView() method.
        return ViewDefault::DIRNAME;
    }
    public function getPath():string {
        return __DIR__.DIRECTORY_SEPARATOR.ViewDefault::DIRNAME;
    }
    public function checkExists() {
        if(!is_dir(__DIR__.DIRECTORY_SEPARATOR.ViewDefault::DIRNAME)) {
            $this->form->setting->exception('Not exists dir for View: '.__DIR__.DIRECTORY_SEPARATOR.ViewDefault::DIRNAME);
        }
        if(!is_writable(__DIR__.DIRECTORY_SEPARATOR.ViewDefault::DIRNAME)) {
            $this->form->setting->exception('Not writable for View: '.__DIR__.DIRECTORY_SEPARATOR.ViewDefault::DIRNAME);
        }
    }
}