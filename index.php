<?php
/**
 *
 * Title:GRC/IT328/Dating App/index.php
 * Author: Robert Hill III
 * Date: 04.18.2019, 05.03.2019
 * Code Version: V1.1
 * Availability: http://rhill.greenriverdev.com/328/datingB/index.php
 *
 */



// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Start session
session_start();

//Require the business logic
require_once('model/validation_functions.php');

////Include static head
//include('views/head.html');

//Create an instance of the Base class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define arrays
$f3->set('in',array('movies','cooking','board games',
    'puzzles','reading','playing cards','video games'));
$f3->set('out',array('hiking','biking','swimming',
    'collecting','walking','climbing'));

//Define a default route
$f3->route('GET /', function()
{
    session_destroy();
    //Display a view
    $view = new Template();
    echo $view->render('views/home.html');

});

//Define route to Create a personal info form
$f3->route('GET|POST /cap', function($f3)
{

    if(!empty($_POST)) {

        $uFirst = $_POST['uFirst'];
        $uLast  = $_POST['uLast'];
        $uAge   = $_POST['uAge'];
        $uRole  = $_POST['uRole'];
        $uNum   = $_POST['uNum'];
        $premium = $_POST['premium'];
        $member = null;

        $f3->set('uFirst',$uFirst);
        $f3->set('uLast',$uLast);
        $f3->set('uAge',$uAge);
        $f3->set('uRole',$uRole);
        $f3->set('uNum',$uNum);
        $f3->set('premium',$premium);
//
        if(validatePost()) {
            $_SESSION['uFirst'] = $uFirst;
            $_SESSION['uLast'] = $uLast;
            $_SESSION['uAge'] = $uAge;
            $_SESSION['uRole'] = $uRole;
            $_SESSION['uNum'] = $uNum;
            $_SESSION['premium'] = $premium;

            if(empty($premium)){
                //Create a Member if Premium is not chose
                $member = new Member($uFirst, $uLast,$uAge, $uRole,$uNum);
            }
            elseif (!empty($premium)){
                //Create a Premium Member
                $member = new PremiumMember($uFirst, $uLast,$uAge, $uRole,$uNum);
            }

            $_SESSION['member'] = $member;

            $f3->reroute('/pro');
        }

    }
    //Display a view
    $view = new Template();
    echo $view->render('views/personal.html');

});

//Define route to Create a personal info form
$f3->route('GET|POST /pro', function($f3)
{
    if (!empty($_POST)) {
        $uEmail = $_POST['uEmail'];
        $uState = $_POST['uState'];
        $iAge = $_POST['iAge'];
        $iRole = $_POST['iRole'];
        $uBio = $_POST['uBio'];
        $member = null;

        $f3->set('uEmail', $uEmail);
        $f3->set('uState', $uState);
        $f3->set('iAge', $iAge);
        $f3->set('iRole', $iRole);
        $f3->set('uBio', $uBio);
//
        if (validateSeeking()) {
            $_SESSION['uEmail'] = $uEmail;
            $_SESSION['uState'] = $_POST['uState'];
            $_SESSION['iAge'] = $iAge;
            $_SESSION['iRole'] = $_POST['iRole'];
            $_SESSION['uBio'] = $uBio;

            $member = $_SESSION['member'];
                $member->setEmail($uEmail);
                $member->setState($_POST['uState']);
                $member->setInterestAge($iAge);
                $member->setSeeking($_POST['iRole']);
                $member->setBio($uBio);
            $_SESSION['member'] = $member;

            if(!empty($_SESSION['premium'])) {
                $f3->reroute('/inter');
            }
            var_dump($_SESSION['premium']);
//            print_r($member);
            $f3->reroute('/sum');
        }
    }
        //Display a view
        $view = new Template();
        echo $view->render('views/profile.html');
});

$f3->route('GET|POST /inter', function($f3)
{
    //    //Arrange
    //    echo'<p> TO-DID interests page </p>';
    //
    //    //Test
    //    echo "<h1>Profile Info</h1>";
    //    print_r($_POST);
    $member = null;

    if(!empty($_POST))
    {
        $in = $_POST['inDo'];
        $out = $_POST['outDo'];

        $f3->set('inPic', $in);
        $f3->set('outPic',$out);

        if(validInterests())
        {
            $_SESSION['inDo'] = $in ;
            $_SESSION['outDo'] = $out;


            //Get Premium Member
            $member = $_SESSION['member'];
                $member->setInDoorInterests($in);
                $member->setOutDoorInterests($out);
            $_SESSION['member'] = $member;

            $f3->reroute('/sum');
        }
    }
    //Display a view
    $view = new Template();
    echo $view->render('views/interests.html');

});

$f3->route('GET|POST /sum', function($f3)
{
//    $_SESSION['inDo']  = $_POST['inDo'];
//    $_SESSION['outDo'] = $_POST['outDo'];

    $member = null;

    //Get Member info
    $member = $_SESSION['member'];
    $interest = null;
    if($member instanceof PremiumMember) {
        if (!(count($member->getInDoorInterests()) == 0)
            && count($member->getOutDoorInterests()) == 0) {

            $interests = $member->getInDoorInterests();

        } elseif (count($member->getInDoorInterests()) == 0
            && !(count($member->getOutDoorInterests()) == 0)) {

            $interests = $member->getOutDoorInterests();

        } elseif ((count($member->getInDoorInterests()) == 0)
            && count($member->getOutDoorInterests()) == 0) {
            $interests = [];
        }
        else {
            $interests = array_merge($member->getInDoorInterests(), $member->getOutDoorInterests());
        }

        $interest             = implode(", ", $interests);
    }
    $_SESSION['interest'] = $interest;


    $f3->set('member',$member);
    //Display a view
    $view = new Template();
    echo $view->render('views/summary.html');

});

//Run fat free
$f3->run();