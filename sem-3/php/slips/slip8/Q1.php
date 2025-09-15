<!DOCTYPE html>
<html>

<head>
    <title>Largest of Three Numbers</title>
</head>

<body>
    <h2>Find Largest of Three Numbers</h2>

    <form method="post">
        Enter First Number: <input type="number" name="num1" required><br><br>
        Enter Second Number: <input type="number" name="num2" required><br><br>
        Enter Third Number: <input type="number" name="num3" required><br><br>
        <input type="submit" name="submit" value="Find Largest">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        // Anonymous function to find largest
        $largest = function ($a, $b, $c) {
            return max($a, $b, $c);
        };

        echo "<h3>Numbers are: $num1, $num2, $num3</h3>";
        echo "<h3>Largest number is: " . $largest($num1, $num2, $num3) . "</h3>";
    }
    ?>
</body>

</html>