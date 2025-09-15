<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series</title>
</head>
<body>
    <h2>Fibonacci Series Generator</h2>
    <form method="post">
        Enter how many terms: <input type="number" name="num" required>
        <button type="submit" name="submit">Generate</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $n = $_POST['num'];

        $first = 0;
        $second = 1;

        echo "<h3>Fibonacci series of $n terms:</h3>";
        echo $first . " " . $second . " ";

       
        for ($i = 3; $i <= $n; $i++) {
            $next = $first + $second;
            echo $next . " ";
            $first = $second;
            $second = $next;
        }
    }
    ?>
</body>
</html>
