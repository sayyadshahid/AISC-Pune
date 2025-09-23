<!-- 1.	Write a PHP program to check if a cookie is set or not.  -->

<?php
// Set cookie (valid for 5 minutes)
setcookie("username", "JohnDoe", time() + 300, "/");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Check Cookie</title>
</head>
<body>
    <?php
    if (isset($_COOKIE["username"])) {
        echo "Cookie is set! Value = " . $_COOKIE["username"];
    } else {
        echo "Cookie is not set yet. Please refresh the page.";
    }
    ?>
</body>
</html>
