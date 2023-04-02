<?php
    session_start();
?>
<?php
    require("database.php");

    //CREATE USER
    if (isset($_POST['save_user'])) {
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['pass'];
        $confirm_password = $_POST['confirm_pass'];

        if ($password !== $confirm_password) {
            exit("<p>Passwords do not match</p><a href='register.php'>Go back</a>");
        }
        $cryptic_pass = md5($password);



        $user_exist_email = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($user_exist_email) > 0) {
            exit("<p>This email already exists</p><a href='register.php'>Go back</a>");
        }

        $user_exist_username = mysqli_query($db_connect, "SELECT * FROM users WHERE username = '$username'");
        if (mysqli_num_rows($user_exist_username) > 0) {
            exit("<p>Username has been taken, kindly pick another one</p><a href='register.php'>Go back</a>");
        }

        $insert_data = mysqli_query($db_connect, "INSERT INTO users(f_name,l_name,username,email,gender,password)
        VALUES('$f_name','$l_name','$username','$email','$gender','$cryptic_pass')");
        

        if ($insert_data) {
            $new_user = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");
            $new_user_details = mysqli_fetch_assoc($new_user);

            $_SESSION['login'] = true;
            $_SESSION['id'] = $new_user_details['id'];
        }
        header("Location: start.php");
    }

    //LOGIN USER
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $user_exist = mysqli_query($db_connect, "SELECT * FROM users WHERE email='$email'");
        $user_details = mysqli_fetch_assoc($user_exist);

        if(!mysqli_num_rows($user_exist)) {
            exit("<p>User not found</p><p><a href='register.php'>Register new user</a></p><a href='index.php'>Go back to Login</a>");
        }

        $cryptic_pass = md5($password);

        if ($cryptic_pass !== $user_details['password']) {
            exit("<p>Password is incorrect</p><p><a href='index.php'>Go back to Login</a></p><a href='register.php'>Register new user</a>'");
        }

        $_SESSION['login'] = true;
        $_SESSION['id'] = $user_details['id'];

        header("Location: start.php");
    }
?>