<!-- 2.	Write a PHP program to start a Session and destroy the session.  -->

<?php
// Start the session
session_start();

// Set a session variable
$_SESSION["username"] = "JohnDoe";
$_SESSION["role"] = "Admin";

echo "Session started. <br>";
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Role: " . $_SESSION["role"] . "<br>";
 

session_destroy();

echo "Session destroyed.";
?>
