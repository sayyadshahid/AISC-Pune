<!DOCTYPE html>
<html>

<body>
    <h2>Palindrome Number Checker</h2>
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <button type="submit" name="submit">Check</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $original = $num;
        $rev = 0;

        
        while ($num > 0) {
            $digit = $num % 10;            // get last digit
            $rev = ($rev * 10) + $digit;   // append to reversed
            $num = (int)($num / 10);       // remove last digit
        }

        echo "<h3>Original Number: $original</h3>";
        echo "<h3>Reversed Number: $rev</h3>";

        if ($original == $rev) {
            echo "<h3 style='color:green;'> $original is a Palindrome!</h3>";
        } else {
            echo "<h3 style='color:red;'> $original is NOT a Palindrome.</h3>";
        }
    }
    ?>
</body>
</html>
