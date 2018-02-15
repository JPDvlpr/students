<?php
function conenct(){
    try {
        //Instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME,
            DB_PASSWORD);
        echo 'Still Connected to database!';
    } catch (PDOException $e) {
        echo $e->getMessage();
        return;
    }
}