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

//Define a default route
$f3->route('GET /', function ($f3) {

    echo 'heyyaa<br>';
    $dbh = connect();

    try {
        //Instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME,
            DB_PASSWORD);
        echo 'Still Connected to database!';
        return;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return;
    }

    //load a template
    $template = new Template();


    //alternate syntax
    //echo Template::instance()->render('views/info.html');
}
);

//run fat free
$f3->run();
?>