# formherox
The FormHero SDK provides methods for all form functions.

Codes not working is on stage of ideas bulding. 

# Now codes is in build and can be refactored a lot concepts

    class Bootstrap {
        
        public static function run() {

            $form = new FormHero\Form();
            $form->databases()->mysql($objectConnect, 'TableName');
            
            $form->session()->object(& $_SESSION, 'key-name');
            

            $form->inputText('userName')->Required()->Integer()->Chars(1,20)->FiltersRegex('#^([a-z0-9\-_]+)$#iu');
            $form->select('roles')->Options()->setOption('option-3','-- select option 3', true);
            $form->inputRadio();
            $form->formSubmit(function($form, $post) {
                $post->found(false);
                if($post->FailRequired()) {
                    $post->showWarrings();
                    return false;
                }
                $formIter = \ArrayIterator($form);
                $tabFilter = MyFilter(formIter);
                // Filter for ArrayIterator alternative
                foreach($form as $key=>$value) {
                    if($value->isPosted()) {
                    $val = $value->getPost();
                    $name  $value->getName();  
                    }
                }

                $post->saveToSession(true, $tabFilter);
                $post->saveToDatabase(true, $tabFilter);

            });
            echo 'works';
        }
    }

Filter Example:


    class MyFilter extends FilterIterator implements FilterFormSubbmited {
        public function isPosted() {      
            return $this->current()->isPosted();
        }
    }
