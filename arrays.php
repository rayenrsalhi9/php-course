<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $me = ['rayen', 'salhi'];

        $me[] = '20'; // appending to array

        echo $me[0]; echo "<br>";
        echo $me[1]; echo "<br>";
        echo $me[2]; echo "<br>";

        unset($me[1]); // delete element (this index stays empty)

        echo $me[0]; echo "<br>";
        echo $me[2]; echo "<br>";

        $fruits = ['banana', 'apple', 'orange'];

        echo $fruits[0]; echo "<br>";
        echo $fruits[1]; echo "<br>";

        array_splice($fruits, 1, 1);

        echo $fruits[0]; echo "<br>";
        echo $fruits[1]; echo "<br>";

        //////////////////////////////////////////////////////////////

        $program = [
            'web' => 'rayen',
            'database' => 'salhi',
            'frontend' => 'rayens'
        ];

        echo $program['web']; echo "<br>"; // like object in js
        print_r($program); echo "<br>"; // print the whole array
        echo count($program); echo "<br>"; // length

        /////////////////////////////////////////////////////////////

        $nums = [1, 115, 0, 35, 4, 12];

        sort($nums);
        print_r($nums); echo "<br>";

        array_push($nums, 15);
        sort($nums);
        print_r($nums);

        // array_push() is for indexed arrays
        // $tasks["backend"] = "x" : use this for associative arrays

        /////////////////////////////////////////////////////////////////////

        $fruit = ['apple', 'orange'];
        $tt = ['peace', 'love', 'work'];

        echo "<br>";
        print_r($fruit); echo "<br>";

        array_splice($fruit, 1, 0, "pear"); // insert element in-between
        print_r($fruit); echo "<br>";

        array_splice($fruit, 0, 0, $tt); // insert a whole array
        // array will be destructed, not an element 0 of array
        echo "<br>";
        print_r($fruit);

        ////////////////////////////////////////////////////////////////////////

        $food = [
            'fruits' => ['apple', 'mango'],
            'vegies' => ['tomato', 'potato'],
            'drinks' => ['water', 'milk']
        ];

        echo "<br>";
        print_r($food['fruits']);
        echo "<br>";
        print_r($food);
    ?>
</body>
</html>