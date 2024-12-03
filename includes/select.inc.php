<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $search = $_POST["search"];

        try {

            require_once "dbh.inc.php";

            $query = "
                select * from comments where username = :search;
            ";

            $statement = $pdo -> prepare($query);

            $statement ->bindParam(":search", $search);

            $statement -> execute();

            $result = $statement -> fetchAll(pdo::FETCH_ASSOC);


            // close cnct

            $pdo = null;
            $statement = null; 

        } catch (PDOException $e) {
            die("query failed : ". $e->getMessage());
        }
    } else {
        header("Location: ../index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selection_result</title>
</head>
<body>
    <h1>Search results :</h1>
    <?php
        if (empty($result)) {
            echo "no results to show.";
        } else {
            foreach($result as $row) {
                echo htmlspecialchars($row["username"]); echo "<br>"; 
                echo htmlspecialchars($row["content"]); echo "<br>";
                echo htmlspecialchars($row["created_at"]); echo "<br>"; 
                echo str_repeat("#", 40); echo "<br>";
            }
        }
    ?>
</body>
</html>