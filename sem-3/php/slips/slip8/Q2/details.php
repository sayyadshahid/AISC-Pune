<?php
session_start();

if (empty($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$expired = false;

// Fixed-window check:
if (isset($_SESSION['deadline']) && time() > $_SESSION['deadline']) {
    $expired = true;
}

if ($expired) {
    session_unset();
    session_destroy();
    echo "<p style='color:red'>Session expired! Please login again.</p>";
    echo "<p><a href='login.php'>Back to Login</a></p>";
    exit;
}
?>
<!DOCTYPE html>
<html><body>
<h2>Enter Your Details</h2>
<form method="post" action="showdetaills.php">
  Name: <input type="text" name="name" required><br><br>
  City: <input type="text" name="city" required><br><br>
  Phone No: <input type="text" name="phoneno" required><br><br>
  <button type="submit" name="save">Save Details</button>
</form>
</body></html>
