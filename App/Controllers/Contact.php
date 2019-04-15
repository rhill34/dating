<?php
class Contact {

    public function index(){
//        $view = new Template();
//        echo $view->render('views/profile.html');

        $f3 = Base::instance();
        echo $f3->get('PARAMS.0');
        echo '<br />';
        echo 'hello from contact';

    }
}