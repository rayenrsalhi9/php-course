<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            min-height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
            border: 2px solid #111;
            padding: 4px 20px;
            border-radius: 5px;
            gap: 5px;
            max-width: 350px;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <h2>Register</h2>

        <label for="username">Username : </label>
        <input type="text" name="username">

        <label for="email">Email : </label>
        <input type="email" name="email">

        <label for="message">Message : </label>
        <textarea name="message" rows="4" style="resize: none;"></textarea>

        <input type="submit" value="Register">

        <p>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $name = htmlspecialchars($_POST["username"]);
                    $email = htmlspecialchars($_POST["email"]);
                    $msg = htmlspecialchars($_POST["message"]);


                    $errors = false;

                    if (empty($name) || empty($email) || empty($msg)) {
                        echo "Please fill out all fields.";
                        $errors = true;
                    }

                    if (!$errors) {
                        echo "Hello there, <b> $name </b> !"; echo "<br>"; echo "<br>";
                        echo "Will send a confirmation message to <b> $email </b> ";
                    }
                }
            ?>
        </p>
    </form>
</body>
</html>