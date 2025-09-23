<!-- 9. Simple Login Form -->


<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form>

    
</body>
</html>


<?php
// Predefined username and password for demo
$valid_username = "admin";
$valid_password = "12345";

$message = ""; // To display login status

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $message = "Login Successful! Welcome, $username.";
        // echo $message;

    } else {
        $message = "Invalid Username or Password!";
    }

        echo $message;

}
?>