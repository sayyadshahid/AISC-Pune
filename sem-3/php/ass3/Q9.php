<?php
$user = "admin";
$pass = "1234";

if (isset($_POST['login'])) {
    if ($_POST['username'] == $user && $_POST['password'] == $pass) {
        echo " Login Successful!";
    } else {
        echo " Invalid login!";
    }
}
?>

<form method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="login" value="Login">
</form>
