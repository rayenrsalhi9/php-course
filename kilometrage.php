<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="km">Kilometers : </label>
        <input type="number" name="km">

        <input type="submit" value="Go to mph">

        <h3>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $km = filter_input(INPUT_POST, "km", FILTER_SANITIZE_NUMBER_FLOAT);

                    $error = false;

                    if (empty($km)) {
                        echo "Please fill all fields."; echo "<br>";
                        $error = true;
                    }

                    if (!is_numeric($km)) {
                        echo "Enter a numeric value."; echo "<br>";
                        $error = true;
                    }

                    if (!$error) {
                        $mph = $km * 0.6;
                        echo "$km KM ==> $mph MPH";
                    }
                }
            ?>
        </h3>
    </form>
</body>
</html>