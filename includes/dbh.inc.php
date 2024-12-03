<?php

// will create a dns : data source name
// a dsn will tell the serve which info to use to connect to db

$dsn = "mysql: host=localhost; dbname=db_course;";

// localhost because of xamp which is a localhost
// when on a server, just type its name

$dbusername = "root";
$dbpassword = "";

// will use try catch to catch any errors when connecting
/* 
== 3 ways to connect to a db ==  
    1) mysql connection (which is very bad & old due to security issues)
    2) mysqli connection (i for improved)
    3) pdo connection (php data objects) : more flexible with different types of db
    like sqlite,...
*/

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    // now we created a database object
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // what means : if we get an error, will throw an exception
} catch (PDOException $e) {
    echo "connection failed : ". $e->getMessage();
    // it returns the exception message as a string
}

// will use prepared statements when inserting into a db from browser
// for security reasons : ppl can type sql code and destroy your db
// prepared statements are very important then