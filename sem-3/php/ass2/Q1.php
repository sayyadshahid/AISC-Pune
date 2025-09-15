<!DOCTYPE html>
<html>
 
<body>
    <div class="calc">
        
        <form method="post">



            <input type="number" name="num1" placeholder="Enter first number" >
            <br>
            <input type="number" name="num2" placeholder="Enter second number" >
            <br>
            <select name="operation">



                <option value="add">Addition (+)</option>

                <option value="sub">Subtraction (-)</option>

                <option value="mul">Multiplication (×)</option>

                <option value="div">Division (÷)</option>
            </select>
            <br>
            <button type="submit" name="submit">Calculate</button>
        </form>


        <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = "";

         
            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "sub":
                    $result = $num1 - $num2;
                    break;
                case "mul":
                    $result = $num1 * $num2;
                    break;
                case "div":
                        $result = $num1 / $num2;
                    break;
                default:
                    $result = "Invalid operation";
            }

            echo "<div class='result'>Result: $result </div>";
        }
        ?>
    </div>
</body>
</html>
