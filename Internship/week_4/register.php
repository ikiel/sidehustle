<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Register</h2>
    
    <form action="process.php" method="post">
        <label for="">First Name:</label>
        <input type="text" name="f_name" placeholder="Enter your first name" required><br><br>

        <label for="">Last Name:</label>
        <input type="text" name="l_name" placeholder="Enter your last name" required><br><br>

        <label for="">Username:</label>
        <input type="text" name="username" placeholder="Enter your username" required><br><br>

        <label for="">Email:</label>
        <input type="text" name="email" placeholder="Enter your email" required><br><br>

        <label for="">Gender:</label>
        <select name="gender" id="" required>
            <option value="">Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>

        <label for="">Password:</label>
        <input type="password" name="pass" placeholder="Enter your password" required><br><br>
    
        <label for="">Confirm Password:</label>
        <input type="password" name="confirm_pass" placeholder="Confirm your password" required><br><br>

        <input type="submit" value="Register" name="save_user">
    </form>
    <p><a href="index.php">Login</a></p>
</body>
</html>