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

//Start session
session_start();

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Require the business logic
require_once('model/validation_functions.php');

////Include static head
//include('views/head.html');

//Create an instance of the Base class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function()
{
    //Display a view
    $view = new Template();
    echo $view->render('views/home.html');

});

//Define route to link nav bar back to home page
$f3->route('GET /nav', function()
{
    //Display a view
    $view = new Template();
    echo $view->render('views/home.html');

});

//Define route to Create a personal info form
$f3->route('GET|POST /cap', function($f3)
{
    $uFirst = null;
    $uLast = null;
    $uAge = null;
    $uRole = null;
    $uNum = null;

    if(!empty($_POST))
    {

        $uFirst = $_POST['uFirst'];
        $uLast  = $_POST['uLast'];
        $uAge   = $_POST['uAge'];
        $uRole  = $_POST['uRole'];
        $uNum   = $_POST['uNum'];

        $personalForm = array($uFirst,$uLast, );

            print_r($_POST);
            print_r($personalForm);
//
        if(validatePost($personalForm))
        {
            $f3->reroute('/inter');
        }

    }
    //Display a view
    $view = new Template();
    echo $view->render('views/personal.html');

});

//Define route to Create a personal info form
$f3->route('POST /pro', function()
{
    //  //Test
    //    echo "Personal Info";
    //    print_r($_POST);
    $_SESSION['uFirst'] = $_POST['uFirst'];
    $_SESSION['uLast']  = $_POST['uLast'];
    $_SESSION['uAge']   = $_POST['uAge'];
    $_SESSION['uRole']  = $_POST['uRole'];
    $_SESSION['uNum']   = $_POST['uNum'];
    //    print_r($_SESSION);

    //Display a view
    $view = new Template();
    echo $view->render('views/profile.html');

});

$f3->route('GET|POST /inter', function()
{
    //    //Arrange
    //    echo'<p> TO-DID interests page </p>';
    //
    //    //Test
    //    print_r($_SESSION);
    //    echo "<h1>Profile Info</h1>";
    //    print_r($_POST);

    $_SESSION['uEmail'] = $_POST['uEmail'];
    $_SESSION['uState'] = $_POST['uState'];
    $_SESSION['iAge']   = $_POST['iAge'];
    $_SESSION['iRole']  = $_POST['iRole'];
    $_SESSION['uBio']   = $_POST['uBio'];


    //Display a view
    $view = new Template();
    echo $view->render('views/interests.html');

});

$f3->route('POST /sum', function()
{
    //    //Arrange
    //    echo'<p> TO-DID summary page </p>';
    ////
    //    //Test
    //      print_r($_SESSION);
    ////    echo "<h1>Interests Info</h1>";
    ///     print_r($_POST);
    $_SESSION['inDo']  = $_POST['inDo'];
    $_SESSION['outDo'] = $_POST['outDo'];

    if (!(count($_SESSION['inDo']) == 0) && count($_SESSION['outDo']) == 0) {
        $interests = $_SESSION['inDo'];
    } elseif ((count($_SESSION['inDo']) == 0) && !count($_SESSION['outDo']) == 0) {
        $interests = $_SESSION['outDo'];
    } elseif ((count($_SESSION['inDo']) == 0) && count($_SESSION['outDo']) == 0) {
        $interests = [];
    }
    else {
        $interests = array_merge($_SESSION['inDo'], $_SESSION['outDo']);
    }

    $interest             = implode(", ", $interests);
    $_SESSION['interest'] = $interest;

    //Display a view
    $view = new Template();
    echo $view->render('views/summary.html');

});

//Run fat free
$f3->run();