<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php course</title>
</head>
<body>
    <?php 

        // variables :
        $name = 'rayen';
        echo "$name";
        echo "<br>";

        $arr = ['rayen', 'salhi'];
        echo $arr[0];
        echo "<br>";

        // built-in variables :
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo $_SERVER["PHP_SELF"];
        echo "<br>";
        echo $_SERVER["SERVER_NAME"];
        echo "<br>";
        echo $_SERVER["REQUEST_METHOD"];
        echo "<br>";echo "<br>";
    ?>

    <form action="base.php" method="post">

        <label for="username">Username</label>
        <input type="text" name="username"> <br>
        <label for="password">Password</label>
        <input type="password" name="password"> <br>

        <label for="subject">Favorite subject</label>
        <select name="subject">
            <option value="none">none</option>
            <option value="php">php</option>
            <option value="javascript">javascript</option>
        </select> <br>

        <input type="submit" value="submit form">

    </form>

    <br><br>

    <!-- Opeartors -->

    <?php 

        $a = 'hello';
        $b = 'world';
        $c = '!';

        $d = $a . $b . $c;

        echo $d; echo "<br>";

        echo 1 + 2; echo "<br>";

        echo 2 ** 4; echo "<br>";

        $x = 4;
        $x ++;
        echo $x; echo "<br>";

        // you can use && or 'and' : both correct
        // same thing for || and 'or'
    ?>
</body>
</html>