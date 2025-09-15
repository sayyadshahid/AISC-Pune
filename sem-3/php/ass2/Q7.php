<!DOCTYPE html>
<html>
<body>
    <h2>Sum of Digits Calculator</h2>
    <form method="post">
        Enter a number: <input type="number" name="num" required>
        <button type="submit" name="submit">Calculate</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $original = $num;
        $sum = 0;

        
        while ($num > 0) {
            $digit =    $num % 10;  
            $sum += $digit;          
            $num = (int)($num / 10); 
        }

        echo "<h3>Original Number: $original</h3>";
        echo "<h3>Sum of Digits: $sum</h3>";
        
    }
    ?>
</body>
</html>
