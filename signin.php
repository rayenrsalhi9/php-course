<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect_database</title>
</head>
<body>
    <h1>Sign in</h1>
    <form action="includes/formhandler.inc.php" method="post">

        <label for="username">Username</label>
        <input type="text" name="username"> <br>

        <label for="email">Email</label>
        <input type="email" name="email"> <br>

        <label for="password">Password</label>
        <input type="password" name="password"> <br>

        <input type="submit" value="Create account">
    </form>
</body>
</html>