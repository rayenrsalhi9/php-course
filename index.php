<?php 
    declare(strict_types = 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_def_fcts</title>
</head>
<body>
    <?php 

        function sayHello(string $name = "user") {
            echo "Hello $name !";
        }
        sayHello();
        sayHello("rayen");

        // indicate the type you only accept 
        // activate strict types to enable this type declaration
        // = "user" is the default value

        //sayHello(123); says error now

        /* SCOPES */

        $test = "I am test";

        function calculate(int $x, int $y) {
            global $test;
            $result = $x + $y;
            return $test; // undefined here, need to import it into this scope
        }

        echo calculate(1, 5); // I am test

        /* STATIC VARIABLES */

        function st() {

            static $x = 0;
            $x++;
            echo $x;
            
        }

        st();
        st();
        st();

        // a normal variable is read as a block of code
        // static variable is shared among all fct calls

        /* CLASSES */

        class myClass {
            static public $x = "hello, world!";
            public function sayHello() {
                echo $this -> x;
            }
        }
        echo myClass::$x;
        // can't access the variable x from outside, unless it is static

        /* CONSTANTS */

        const p = 3.14;
        define("pi", 3.14);

        echo p;
        echo pi;

        // constants are accessible in local scopes
    ?>
</body>
</html>