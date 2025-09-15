<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Numbers</title>
</head>
<body>
    <h2>Find Palindrome Numbers</h2>

    <form method="post" action="">
        Enter Start Number: <input type="number" name="start" required><br><br>
        Enter End Number: <input type="number" name="end" required><br><br>
        <input type="submit" name="submit" value="Find Palindromes">
    </form>

    <?php
    // Function to check if a number is palindrome
    function isPalindrome($num) {
        $reversed = strrev($num); // reverse the number as string
        return $num == $reversed;
    }

    if (isset($_POST['submit'])) {
        $start = $_POST['start'];
        $end = $_POST['end'];

        echo "<h3>Palindrome numbers between $start and $end:</h3>";

        for ($i = $start; $i <= $end; $i++) {
            if (isPalindrome($i)) {
                echo $i . " ";
            }
        }
    }
    ?>
</body>
</html>
