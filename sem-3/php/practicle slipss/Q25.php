<!-- 6. Arithmetic Operations using Radio Buttons and Function -->

<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Calculator</title>
</head>
<body>
    <h2>Arithmetic Calculator</h2>

    <form method="post">
        Number 1: <input type="number" name="num1" step="any" required><br><br>
        Number 2: <input type="number" name="num2" step="any" required><br><br>

        Select Operation:<br>
        <label><input type="radio" name="operation" value="+" required> +</label>
        <label><input type="radio" name="operation" value="-"> -</label>
        <label><input type="radio" name="operation" value="*"> *</label>
        <label><input type="radio" name="operation" value="/"> /</label>
        <label><input type="radio" name="operation" value="%"> %</label>
        <br><br>

        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    // Function to perform arithmetic
    function calculate($num1, $num2, $op) {
        switch ($op) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                if ($num2 == 0) return "Division by zero error!";
                return $num1 / $num2;
            case '%':
                if ($num2 == 0) return "Modulo by zero error!";
                return $num1 % $num2;
            default:
                return "Invalid operation";
        }
    }

    // Handle form submission
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        $result = calculate($num1, $num2, $operation);
        echo "<h3>Result: $num1 $operation $num2 = $result</h3>";
    }
    ?>
</body>
</html>
