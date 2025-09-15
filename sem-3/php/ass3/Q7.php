<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("name", $_POST['name']);
    setcookie("class", $_POST['class']);
    setcookie("marks", $_POST['marks']);
    echo "Data saved in cookie. Refresh to see.";
}
?>

<form method="post">
    Name: <input type="text" name="name"><br>
    Class: <input type="text" name="class"><br>
    Marks: <input type="number" name="marks"><br>
    <input type="submit">
</form>

<?php
if (isset($_COOKIE['name'])) {
    echo "Student Name: " . $_COOKIE['name'] . "<br>";
    echo "Class: " . $_COOKIE['class'] . "<br>";
    echo "Marks: " . $_COOKIE['marks'] . "<br>";
}
?>
