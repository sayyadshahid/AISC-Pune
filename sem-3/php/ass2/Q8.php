<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h2>Armstrong Number Checker</h2>
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <button type="submit" name="submit">Check</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $original = $num;
        $sum = 0;
 
        $n = strlen((string)$num);

      
        while ($num > 0) {
            $digit = $num % 10;
            $sum += pow($digit, $n);
            $num = (int)($num / 10);
        }

        echo "<h3>Original Number: $original</h3>";
        echo "<h3>Calculated Sum of Digits^$n: $sum</h3>";

        if ($original == $sum) {
            echo "<h3 style='color:green;'>$original is an Armstrong Number.</h3>";
        } else {
            echo "<h3 style='color:red;'> $original is NOT an Armstrong Number.</h3>";
        }
    }
    ?>
</body>
</html>
