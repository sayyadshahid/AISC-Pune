<?php
session_start();

$timeout = 60;



if (time() - $_SESSION['start_time'] > $timeout) {
    session_unset();
    session_destroy();
    echo "<h3>Session expired! Please login again.</h3>";
    echo "<a href='login.php'>Login</a>";
    exit();
}

// Handle form submission
if (isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['city'] = $_POST['city'];
    $_SESSION['mobileno'] = $_POST['mobileno'];
    header("Location: Q29 iii).php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>
<h2>Enter Your Details</h2>
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    City: <input type="text" name="city" required><br><br>
    Mobile No: <input type="text" name="mobileno" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
