<!DOCTYPE html>
<html>
<body>

<h2>Student Grade Checker</h2>

<form method="post">
    Enter Marks: <input type="number" name="marks" required>
    <button type="submit" name="submit">Check Grade</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $marks = $_POST['marks'];

    if ($marks >= 90 && $marks <= 100) {
        $grade = "A+";
    } elseif ($marks >= 80 && $marks < 90) {
        $grade = "A";
    } elseif ($marks >= 70 && $marks < 80) {
        $grade = "B";
    } elseif ($marks >= 60 && $marks < 70) {
        $grade = "C";
    } elseif ($marks >= 50 && $marks < 60) {
        $grade = "D";
    } elseif ($marks >= 0 && $marks < 50) {
        $grade = "F";
    } else {
        $grade = "Invalid marks!";
    }

    echo "<h3>Marks: $marks</h3>";
    echo "<h3>Grade: $grade</h3>";
}
?>

</body>
</html>
