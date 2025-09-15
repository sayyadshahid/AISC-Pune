 
<html>
 
<body>
    <h2>Factorial Calculator</h2>
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <button type="submit" name="submit">Calculate</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $fact = 1;

        // loop for factorial
        for ($i = 1; $i <= $num; $i++) {
            $fact =  $fact * $i;
        }

        echo "<h3>Factorial of $num is: $fact</h3>";
    }
    ?>
</body>
</html>
