<?php
/**
 *
 * Title:GRC/IT328/Dating App/index.php
 * Author: Robert Hill III
 * Date: 04.18.2019
 * Code Version: V1.0
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
$f3->route('GET /cap', function()
{
    //    echo "<h1>personal information</h1>";
    //Display a view
    $view = new Template();
    echo $view->render('views/personal.html');

});

//Define route to Create a personal info form
$f3->route('POST /pro', function()
{
//    //Test
//    print_r($_POST);
//    $form = "Personal Info";
//    $_SESSION['uFirst']        = $_POST['uFirst'];
//    $_SESSION['uLast']         = $_POST['uLast'];
//    $_SESSION['uAge']          = $_POST['uAge'];
//    $_SESSION['optionsRadios'] = $_POST['optionsRadios'];
//    $_SESSION['uNum']          = $_POST['uNum'];
////    print_r($_SESSION);
//    foreach ($_SESSION as $got) {
//        echo "<p>Session has  $got from $form form</p>";
//    }

    //Display a view
    $view = new Template();
    echo $view->render('views/profile.html');

});

$f3->route('POST /inter', function()
{
    //Arrange
    echo'<p> TODO interests page </p>';

    //Test
    print_r($_POST);
//    $form = "Personal Info";
//    $_SESSION['uFirst']        = $_POST['uFirst'];
//    $_SESSION['uLast']         = $_POST['uLast'];
//    $_SESSION['uAge']          = $_POST['uAge'];
//    $_SESSION['optionsRadios'] = $_POST['optionsRadios'];
//    $_SESSION['uNum']          = $_POST['uNum'];
////    print_r($_SESSION);
//    foreach ($_SESSION as $got) {
//        echo "<p>Session has  $got from $form form</p>";
//    }

//    //Display a view
//    $view = new Template();
//    echo $view->render('views/profile.html');

});

$f3->route('GET /breakfast/continental', function()
{
    //    echo "<h1>Breakfast Continental page</h1>";
    //Display a view
    $view = new Template();
    echo $view->render('views/bfast-cont.html');
});

$f3->route('GET /lunch', function()
{
    //    echo "<h1>lunch page</h1>";
    //Display a view
    $view = new Template();
    echo $view->render('views/lunch.html');

});

$f3->route('GET /lunch/brunch/buffet', function()
{
    //    echo "<h1>Brunch Buffet Continental page</h1>";
    //Display a view
    $view = new Template();
    echo $view->render('views/buffet.html');
});

$f3->route('GET /@item', function($f3, $params)
{
    $item         = $params['item'];
    $foodsWeServe = array(
        'spaghetti',
        'enchiladas',
        'pad thai',
        'lumpia'
    );

    if (!in_array($item, $foodsWeServe)) {
        echo "We dont serve $item";
    } else {

        switch ($item) {
            case 'spaghetti':
                echo "<h2>I like $item with meatball</h2>";
                break;
            case 'tacos':
                echo "<h3>Yo no se $item</h3>";
                break;
            case 'bagel':
                $f3->reroute("/breakfast/continental");
                dafault:
                $f3->error(404);
        }
    }
    //    echo "<h1>Brunch Buffet Continental page</h1>";
    //Display a view
    //    $view = new Template();
    //    echo $view->render('views/buffet.html');
});

$f3->route('GET /@first/@last', function($f3, $params)
{
    $first = ucfirst($params['first']);
    $last  = ucfirst($params['last']);

    echo "<h1>Hello, $first $last</h1>";
});

$f3->route('GET /order', function()
{

    //Display a view
    $view = new Template();
    echo $view->render('views/form1.html');
});

$f3->route('POST /order-process', function()
{
    print_r($_POST);
    $_SESSION['food'] = $_POST['food'];
    //Display a view
    $view             = new Template();
    echo $view->render('views/form2.html');
});

$f3->route('POST /summary', function()
{
    //    print_r($_POST);
    $_SESSION['meal'] = $_POST['meal'];
    //Display a view
    $view             = new Template();
    echo $view->render('views/summary.html');
});
////include static Footer //Example
//include('views/footer.html');
//Run fat free
$f3->run();