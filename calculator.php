<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <input type="number" name="num1" placeholder="first number"> <br>

        <select name="operator">
            <option value="add">+</option>
            <option value="substract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select> <br>

        <input type="number" name="num2" placeholder="second number"> <br>

        <input type="submit" value="calculate">

        <h2>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    
                    $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
                    $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
                    $op = htmlspecialchars($_POST["operator"]);

                    $errors = false;

                    if (empty($num1) || empty($num2) || empty($op)) {
                        echo "fill all fields."; echo "<br>";
                        $errors = true;
                    } 
                    
                    if (!is_numeric($num1) || !is_numeric($num2)) {
                        echo "enter numbers only."; echo "<br>";
                        $errors = true;
                    }

                    

                    if (!$errors) {
                        switch ($op) {
                            case 'add' :
                                echo  $num1 + $num2;
                                break;
                            case 'substract' :
                                echo $num1 - $num2;
                                break;
                            case 'multiply' :
                                echo $num1 * $num2;
                                break;
                            case 'divide' :
                                echo $num1 / $num2;
                                break;
                            default :
                                echo 'invalid operator';
                        }
                    }
                    
                }
            ?>
        </h2>
    </form>

    

</body>
</html>