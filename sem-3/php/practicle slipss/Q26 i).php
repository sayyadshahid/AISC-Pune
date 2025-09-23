<!-- 7.	Create a form to accept student information (name, class, address). Once the student 
 information is accepted, accept marks in the next form (python, PHP, ST,  pract1, and project).
  Display the mark sheet for the student in the next form containing  -->

  <?php
setcookie("name", "", time() - 3600, "/");
setcookie("class", "", time() - 3600, "/");
setcookie("address", "", time() - 3600, "/");

if (isset($_POST['submit'])) {
    setcookie("name", $_POST['name'], time() + 3600, "/");
    setcookie("class", $_POST['class'], time() + 3600, "/");
    setcookie("address", $_POST['address'], time() + 3600, "/");
    // Redirect to marks form
    header("Location: Q26 ii).php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>
    <h2>Enter Student Information</h2>
    <form method="post">
        Name: <input type="text" name="name" required><br><br>
        Class: <input type="text" name="class" required><br><br>
        Address: <input type="text" name="address" required><br><br>
        <input type="submit" name="submit" value="Next">
    </form>
</body>
</html>
