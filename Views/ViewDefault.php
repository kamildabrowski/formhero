<?php namespace FormHero\Views;

use FormHero\Form;

class ViewDefault implements ViewInterface  {

    protected Form $form;
    public function __construct() {
        $this->checkExists();
    }
    CONST string DIRNAME = 'Default';
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