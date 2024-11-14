<?php

// get will submit the form in url so we can see it
// post will submit it to another page

// when talking about php, always think about 'security'

// check if form is really submitted, not accessed by going to base url
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $un = $_POST["username"];
    $pas = $_POST["password"];
    $sub = $_POST["subject"];

    // however, it is not the safest thing to retrieve data from the form
    // it may be hacked

    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $subject = htmlspecialchars($_POST["subject"]);

    if (empty($username) || empty($password) || empty($subject)) {
        header('Location: index.php');
        exit();
    }

    // this allows to turn this message entered by user into an html entity
    // means it cannot read as code that can damage your device or database
    // ex : & will be &amp by using htmlspecialchars(), you are safe now

    // also there is htmlentities(), almost the same
    // this takes all useable characters and converts them to html entities

    echo "Hello $username !";
    echo "<br>";
    echo "Your password is $password";
    echo "<br>";
    echo "You actually study $subject";

    header('Location: index.php');
} else {
    header('Location: index.php');
}