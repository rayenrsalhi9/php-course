<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $string = 'hello world';

        /* STRING FUNCTIONS */

        echo strlen($string); // length (spaces included)
        echo "<br>";
        echo strpos($string, 'e'); // position of 'e' in $string (index from 0)
        echo "<br>";
        echo str_replace('world', 'rayen', $string); // replace
        echo "<br>";
        echo strtoupper($string); // lowercase / uppercase
        echo "<br>";

        /* SUBSTRING FUNCTIONS */

        echo substr($string, 0, 5); // substring
        // 0 : initial position    |   5 : length (5 not included)
        echo "<br>";
        print_r(explode(" ", $string)); // like splice() in js
        echo "<br>";

        /* MATH FUNCTIONS */

        $number = -5.5;

        echo abs($number); // absolute value
        echo "<br>";
        echo round($number); // >= .5 -> next value (5.5 => 6)
        echo "<br>";
        echo pow(8, 2); // power x ** y
        echo "<br>";
        echo sqrt(64); // racine carré
        echo "<br>";
        echo rand(1, 50); // random number between x and y
        echo "<br>";

        /* ARRAY FUNCTIONS */

        $array = ['hello', 'world', ':)'];
        $array2 = ['rayen', 'salhi'];

        echo is_array($array); // 1 : true  | 0 : false
        echo "<br>";
        array_push($array, "!"); // push : add from end
        array_pop($array); // pop : remove from end
        print_r(array_reverse($array)); // reverse
        echo "<br>";
        print_r(array_merge($array, $array2)); // merge : add $array2 after $array
        echo "<br>";

        /* DATE / TIME FUNCTIONS */

        echo date('Y-m-d  H:i:s'); // (y : 24)  (Y : 2024)  (i : minutes)
        echo time(); // in seconds since epoch time
        echo "<br>";

        /* TIMESTAMP FUNCTIONS */

        $date = '2024-11-14  18:11:32';

        echo strtotime($date); // turned into seconds since epoch time
        echo "<br>";
    ?>
</body>
</html>