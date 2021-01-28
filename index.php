<?php
/** Create a food order form */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {

    //Display a view
    $view = new Template();
    echo $view->render('views/home.html');
});

//Define an order route
$f3->route('GET /order', function() {

    echo "Order route";
});

//Define an order2 route
$f3->route('GET /order2', function() {

    echo "Order 2 route";
});

//Define a summary route
$f3->route('GET /summary', function() {

    echo "Summary route";
});

//Run Fat-Free
$f3->run();