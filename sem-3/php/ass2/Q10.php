<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h2>Even / Odd Number Checker</h2>
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <button type="submit" name="submit">Check</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

        if ($num % 2 == 0) {
            echo "<h3 style='color:green;'> $num is Even.</h3>";
        } else {
            echo "<h3 style='color:blue;'> $num is Odd.</h3>";
        }
    }
    ?>
</body>
</html>
