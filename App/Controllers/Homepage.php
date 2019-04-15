<?php
class Homepage {

    function index(){
        $view = new Template();
        echo $view->render('views/home.html');
    }
}