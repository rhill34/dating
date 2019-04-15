<?php
class Profile{

    function pro()
    {
        $pro = new Template();
        echo $pro->render('views/profile.html');
    }
}