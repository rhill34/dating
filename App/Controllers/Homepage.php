<?php

class Homepage {

    public function index(){
        $f3=\Base::instance();
        $data = array();
        $data['nav'] = $f3->alias('nav_home');
        $data['personal'] = $f3->alias('person');
        $view = new Template();
        echo $view->render('views/home.php','text/html', $data);
    }
}