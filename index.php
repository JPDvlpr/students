<?php
//Required files
require_once 'vendor/autoload.php';
require_once '../../../config.php';
require_once 'model/db-functions.php';

//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

//create an instance of the Base class
$f3 = Base::instance();

//f3 error debugging
$f3->set(DEBUG, 3);

//connect to database
$dbh = connect();

//Define a default route
$f3->route('GET /', function ($f3) {

    echo 'heyyaa<br>';
    $students = getStudents();
    $f3->set("students", $students);

    //load a template
    $template = new Template();
echo $template->render('views/all-students.html');

    //alternate syntax
    //echo Template::instance()->render('views/info.html');
}
);

//run fat free
$f3->run();
?>