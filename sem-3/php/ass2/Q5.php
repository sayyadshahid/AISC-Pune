<!DOCTYPE html>
<html>
<head>
    <title>Reverse Number</title>
</head>
<body>
    <h2>Reverse a Number</h2>
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <button type="submit" name="submit">Reverse</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $rev = 0;
        $original = $num;

        while ($num > 0) {
            $digit = $num % 10;         // get last digit
            $rev = ($rev * 10) + $digit; // append digit
            $num = (int)($num / 10);    // remove last digit
        }

        echo "<h3>Original Number: $original</h3>";
        echo "<h3>Reversed Number: $rev</h3>";
    }
    ?>
</body>
</html>
