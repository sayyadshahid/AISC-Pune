<?php
session_start();


// Get details
$name = $_SESSION['name'];
$city = $_SESSION['city'];
$mobileno = $_SESSION['mobileno'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Details</title>
</head>
<body>
<h2>Your Details</h2>
<p><strong>Name:</strong> <?php echo $name; ?></p>
<p><strong>City:</strong> <?php echo $city; ?></p>
<p><strong>Mobile No:</strong> <?php echo $mobileno; ?></p>
</body>
</html>
