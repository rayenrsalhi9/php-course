<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops_php</title>
</head>
<body>
    <?php 

        /* DO WHILE */

        $test = 10;

        do {
            echo $test;
            $test ++;
        } while($test < 10);

        // do while will iterate at least once no matter the condition true or false
        // a normal while won't do the same here

        /* FOR EACH */

        $fruits = ["apple", "manga", "banana"];

        foreach($fruits as $i) {
            echo $i;
        }

        ////////////////////////////////////////////

        $student = [
            "name" => "rayen",
            "age" => 20,
            "tech" => "php"
        ];

        foreach($student as $attribute => $value) {
            echo "$attribute is : $value <br>";
        }


    ?>
</body>
</html>