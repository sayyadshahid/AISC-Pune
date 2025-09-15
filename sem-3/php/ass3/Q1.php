<!DOCTYPE html>
<html>
<head>
    <title>Check Cookie</title>
</head>
<body>
    <h2>Cookie Example</h2>

    <?php
 
    $cookie_name = "username";
    $cookie_value = "JohnDoe";
    setcookie($cookie_name, $cookie_value, time() + (60 * 5), "/");  
 
    if (isset($_COOKIE[$cookie_name])) {
        echo "<p> Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name] . "</p>";
    } else {
        echo "<p> Cookie is not set yet. Refresh or reload the page.</p>";
    }
    ?>
</body>
</html>
