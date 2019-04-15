<?php
// Turn on error reporting
ini_set
('display_errors', 1);
error_reporting(E_ALL );

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Configure setting for the AUTOLOAD Global
$f3->config('App/Config/setup.cfg');
//Configure setting for the Routes
$f3->config('App/Config/routes.cfg');

//Run fat free
$f3->run();

