<?php
session_start();

if (empty($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

$expired = false;
if (isset($_SESSION['deadline']) && time() > $_SESSION['deadline']) {
    $expired = true;
}

if ($expired) {
    session_unset();
    session_destroy();
    echo "<p style='color:red'>⏰ Session expired! Please login again.</p>";
    echo "<p><a href='login.php'>Back to Login</a></p>";
    exit;
}

if (isset($_POST['save'])) {
    $_SESSION['name']    = $_POST['name'] ?? '';
    $_SESSION['city']    = $_POST['city'] ?? '';
    $_SESSION['phoneno'] = $_POST['phoneno'] ?? '';
}
?>
<!DOCTYPE html>
<html><body>
<h2>Details (from $_SESSION)</h2>
<b>Name:</b> <?= htmlspecialchars($_SESSION['name']) ?> <br>
<b>City:</b> <?= htmlspecialchars($_SESSION['city']) ?><br>
<b>Phone:</b> <?= htmlspecialchars($_SESSION['phoneno']) ?><br><br>

<form method="post" action="logout.php">
  <button>Logout</button>
</form>
</body> 