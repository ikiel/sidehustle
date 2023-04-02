<?php
    require("sessionstart.php");
    require("database.php");
?>
<?php
    $current_user_session = $_SESSION['id'];
    $current_user = mysqli_query($db_connect, "SELECT * FROM users WHERE id = '$current_user_session'");
    $current_user_details = mysqli_fetch_assoc($current_user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>WELCOME! <?= $current_user_details['f_name'] ?></h1>
    <p>You have successfully logged in to your account</p>
    <p>Do you want to logout?</p>
    <a href='logout.php'>logout</a>
</body>
</html>