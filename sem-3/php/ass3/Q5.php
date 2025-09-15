<!DOCTYPE html>
<html>
<body>
<form method="post">
    <input type="radio" name="shape" value="circle"> Circle
    <input type="radio" name="shape" value="square"> Square
    <input type="radio" name="shape" value="triangle"> Triangle
    <br><input type="number" name="num" placeholder="Enter value"><br>
    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $shape = $_POST['shape'];
    $num = $_POST['num'];

    switch ($shape) {
        case "circle":
            $area = 3.14 * $num * $num;
            echo "Area of Circle: $area";
            break;
        case "square":
            $area = $num * $num;
            echo "Area of Square: $area";
            break;
        case "triangle":
            $area = 0.5 * $num * $num;
            echo "Area of Triangle: $area";
            break;
    }
}
?>
</body>
</html>
