<?php
session_start();

$timeout = 60;

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple login check
    if ($username === "admin" && $password === "12345") {
        $_SESSION['loggedin'] = true;
        $_SESSION['start_time'] = time();
        header("Location: Q29 ii).php");
        exit();
    } else {
        $error = "Invalid username or password!";
        echo $error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>
</body>
</html>
