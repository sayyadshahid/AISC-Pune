<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Prime Number Checker</h2>
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <button type="submit" name="submit">Check</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $isPrime = true;

        if ($num <= 1) {
            $isPrime = false; // 0 and 1 are not prime
        } else {
            // check divisibility from 2 to sqrt(num)
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        if ($isPrime) {
            echo "<h3 style='color:green;'>$num is a Prime Number.</h3>";
        } else {
            echo "<h3 style='color:red;'> $num is NOT a Prime Number.</h3>";
        }
    }
    ?>
</body>
</html>

