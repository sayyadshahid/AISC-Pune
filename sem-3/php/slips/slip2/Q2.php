<!DOCTYPE html>
<html>
<body>
<?php
// STEP 1: Accept student info
if (!isset($_POST['step1']) && !isset($_POST['step2'])) {
?>
    <h2>Student Information</h2>
    <form method="post">
        Name: <input type="text" name="name" required><br><br>
        Class: <input type="text" name="class" required><br><br>
        Address: <input type="text" name="address" required><br><br>
        <button type="submit" name="step1">Next</button>
    </form>
<?php
}

// STEP 2: Accept marks
if (isset($_POST['step1'])) {
    // store student info in cookies
    setcookie("name", $_POST['name'], time() + 3600);
    setcookie("class", $_POST['class'], time() + 3600);
    setcookie("address", $_POST['address'], time() + 3600);
?>
    <h2>Enter Marks</h2>
    <form method="post">
        Java: <input type="number" name="java" required><br><br>
        PHP: <input type="number" name="php" required><br><br>
        ST: <input type="number" name="st" required><br><br>
        IT: <input type="number" name="it" required><br><br>
        Pract1: <input type="number" name="pract1" required><br><br>
        Project: <input type="number" name="project" required><br><br>
        <button type="submit" name="step2">Generate Marksheet</button>
    </form>
<?php
}

// STEP 3: Display Marksheet
if (isset($_POST['step2'])) {
    // store marks in cookies
    setcookie("java", $_POST['java'], time() + 3600);
    setcookie("php", $_POST['php'], time() + 3600);
    setcookie("st", $_POST['st'], time() + 3600);
    setcookie("it", $_POST['it'], time() + 3600);
    setcookie("pract1", $_POST['pract1'], time() + 3600);
    setcookie("project", $_POST['project'], time() + 3600);

    // calculate total & percentage
    $total = $_POST['java'] + $_POST['php'] + $_POST['st'] + $_POST['it'] + $_POST['pract1'] + $_POST['project'];
    $percentage = $total / 6;

    echo "<h2>Marksheet</h2>";
    echo "Name: " . $_COOKIE['name'] . "<br>";
    echo "Class: " . $_COOKIE['class'] . "<br>";
    echo "Address: " . $_COOKIE['address'] . "<br><br>";

    echo "<b>Marks:</b><br>";
    echo "Java: " . $_POST['java'] . "<br>";
    echo "PHP: " . $_POST['php'] . "<br>";
    echo "ST: " . $_POST['st'] . "<br>";
    echo "IT: " . $_POST['it'] . "<br>";
    echo "Pract1: " . $_POST['pract1'] . "<br>";
    echo "Project: " . $_POST['project'] . "<br><br>";

    echo "Total Marks: " . $total . "<br>";
    echo "Percentage: " . number_format($percentage, 2) . "%";
}
?>
</body>
</html>
