<?php

//Turn in error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');
// create an instance of the Base class
$f3 = Base::instance();
$f3-> set('DEBUG', 3);

// define a default route (home page)
$f3 -> route ('GET /', function(){
    //echo "<h1> My Food Page </h1>";
    $view = new Template();
    echo $view->render("views/home.html");
});

// define a "breakfast route"
$f3->route('GET /breakfast', function(){
    $view = new Template();
    echo $view->render("views/breakfast.html");
});

// define a "lunch route"
$f3->route('GET /lunch', function(){
    $view = new Template();
    echo $view->render("views/lunch.html");
});

// define a "Parametered route"
$f3->route('GET /@first/@last', function($f3, $params){
    echo "Hello, ". $params['first'] . " " .$params['last'];
});


// run fat free
$f3->run();