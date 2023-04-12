<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Studenty Registration Form:</h1>

    <form action="process.php" method="post">
        < <label for="">First Name:</label>
        <input type="text" name="f_name" placeholder="Enter your First Name" required><br><br>

        <label for="">Surame:</label>
        <input type="text" name="surname" placeholder="Enter your Surname" required><br><br>

        <label for="">Department:</label>
        <input type="text" name="department" placeholder="Enter your Department" required><br><br>

        <label for="">Age:</label>
        <input type="text" name="age" placeholder="Enter your Age" required><br><br>

        <label for="">Email:</label>
        <input type="text" name="email" placeholder="Enter your Email" required><br><br>

        <label for="">Phone Number:</label>
        <input type="text" name="p_number" placeholder="Enter your Phone Number" required><br><br>

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

        <input type="submit" value="Register" name="save_student">
    </form>
</body>
</html>
rm 