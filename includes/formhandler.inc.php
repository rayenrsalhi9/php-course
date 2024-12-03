<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // for best practice, use htmlspecialchars() when displaying data

    try {

        // will try connecting to db
        // grab connection from the appropriate file

        require_once "dbh.inc.php";

        $query = "
            insert into testuser
            (username, email, pwd)
            values(?, ?, ?);
        ";

        $statement = $pdo -> prepare($query);

        $statement -> execute([$username, $email, $password]);

        // close the connection at the end
        // it is actually done auto.
        // but for best practice

        $pdo = null;
        $statement = null;

        header("Location: ../index.php");

        die(); 
        // or use exit();

    } catch (PDOException $e) {
        die("query failed : ". $e->getMessage());
        // die() will terminate code and stop running it
    }


} else {
    header("Location: ../index.php");
}