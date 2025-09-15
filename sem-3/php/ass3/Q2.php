<?php
session_start();
 
$_SESSION["username"] = "shahid";
 
echo "Welcome, " . $_SESSION["username"] . "<br>";
 
session_destroy();
echo "Session destroyed!";
?>
