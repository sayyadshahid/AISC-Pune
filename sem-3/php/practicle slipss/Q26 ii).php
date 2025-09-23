<?php
// Ensure student info cookies exist
if (!isset($_COOKIE['name'])) {
    header("Location: student_info.php");
    exit();
}

if (isset($_POST['submit'])) {
    setcookie("python", $_POST['python'], time() + 3600, "/");
    setcookie("php", $_POST['php'], time() + 3600, "/");
    setcookie("st", $_POST['st'], time() + 3600, "/");
    setcookie("pract1", $_POST['pract1'], time() + 3600, "/");
    setcookie("project", $_POST['project'], time() + 3600, "/");

    // Redirect to mark sheet page
    header("Location: Q26 iii).php");

    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Marks</title>
</head>
<body>
    <h2>Enter Marks for <?php echo $_COOKIE['name']; ?></h2>
    <form method="post">
        Python: <input type="number" name="python" required><br><br>
        PHP: <input type="number" name="php" required><br><br>
        ST: <input type="number" name="st" required><br><br>
        Pract1: <input type="number" name="pract1" required><br><br>
        Project: <input type="number" name="project" required><br><br>
        <input type="submit" name="submit" value="Submit Marks">
    </form>
</body>
</html>
