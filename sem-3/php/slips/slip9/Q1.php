<!DOCTYPE html>
<html>
<head>
    <title>Mean of Five Numbers</title>
</head>
<body>
    <h2>Find Mean of Five Numbers</h2>

    <form method="post">
        Enter Number 1: <input type="number" name="num1" required><br><br>
        Enter Number 2: <input type="number" name="num2" required><br><br>
        Enter Number 3: <input type="number" name="num3" required><br><br>
        Enter Number 4: <input type="number" name="num4" required><br><br>
        Enter Number 5: <input type="number" name="num5" required><br><br>
        <input type="submit" name="submit" value="Calculate Mean">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $numbers = [
            $_POST['num1'],
            $_POST['num2'],
            $_POST['num3'],
            $_POST['num4'],
            $_POST['num5']
        ];

         
        $meanFunc = function($arr) {
            $sum = array_sum($arr);
            return $sum / count($arr);
        };

        $mean = $meanFunc($numbers);

        echo "<h3>Numbers are: " . implode(", ", $numbers) . "</h3>";
        echo "<h3>Mean of numbers is: $mean</h3>";
    }
    ?>
</body>
</html>
