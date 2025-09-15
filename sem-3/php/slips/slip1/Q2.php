<!-- Q2. Write php programs which display radio buttons of ( +,-,*./,%) depending on users choice ,it will
perform arithmetic operations using function. -->

<body>
    <form method="post">
        <input type="number" name="num1">
        <input type="number" name="num2">


        <input type="radio" name="operation" value="add" required> +
        <input type="radio" name="operation" value="sub"> -
        <input type="radio" name="operation" value="mul"> *
        <input type="radio" name="operation" value="div"> /
         

        <button type="submit" name="submit">submit</button>
    </form>

    <?php
    function calculate($num1, $num2, $op)
    {
        switch ($op) {
            case "add":
                return $num1 + $num2;
            case "sub":
                return $num1 - $num2;
            case "mul":
                return $num1 * $num2;
            case "div":
                return $num1 / $num2;
            default:
                return "Invalid operation";
        }
    }

    if (isset($_POST['submit'])) {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $op = $_POST['operation'];

        $result = calculate($n1, $n2, $op);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>