  <!-- Q1. Write PHP program to find maximum and minimum of two numbers and print the result. Take Input from user. -->
<body>
    <form method="post">
        <input type="number" name="a" placeholder="Enter 1st number" required>
        <input type="number" name="b" placeholder="Enter 2nd number" required>
        <input type="number" name="c" placeholder="Enter 3rd number" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
 
        $max = max($a, $b, $c);
 
        $min = min($a, $b, $c);

        echo "Maximum number is: " . $max . "<br>";
    }
    ?>
</body>
 
