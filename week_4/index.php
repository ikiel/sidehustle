<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidehustle Week 4 Task</title>
</head>
<body>
    <h2>Login</h2>

    <form action="process.php" method="post">
        <label for="">Email</label>
        <input type="text" name="email" placeholder="Enter your email" required><br><br>

        <label for="">Password</label>
        <input type="password" name="pass" placeholder="Enter your password" required><br><br>

        <input type="submit" value="Login" name="login">
    </form>
    <p><a href='register.php'>Register new user</a></p>
</body>
</html>