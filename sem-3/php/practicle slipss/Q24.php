<!-- 5. Area of Shapes using radio buttons -->

<!DOCTYPE html>
<html>
<head>
    <title>Area Calculator</title>
</head>
<body>
    <h2>Calculate Area</h2>

    <form method="post">
        <label>
            <input type="radio" name="shape" value="circle" required> Circle
        </label>
        <label>
            <input type="radio" name="shape" value="square"> Square
        </label>
        <label>
            <input type="radio" name="shape" value="triangle"> Triangle
        </label>
        <br><br>

        <div>
            Radius (for Circle): <input type="number" name="radius" step="any"><br>
            Side (for Square): <input type="number" name="side" step="any"><br>
            Base (for Triangle): <input type="number" name="base" step="any"><br>
            Height (for Triangle): <input type="number" name="height" step="any"><br>
        </div>
        <br>
        <input type="submit" name="submit" value="Calculate Area">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $shape = $_POST['shape'];

        switch ($shape) {
            case 'circle':
                $radius = $_POST['radius'];
                if ($radius > 0) {
                    $area = 3.1416 * $radius * $radius;
                    echo "<h3>Area of Circle: $area</h3>";
                } else {
                    echo "<h3>Please enter radius for Circle.</h3>";
                }
                break;

            case 'square':
                $side = $_POST['side'];
                if ($side > 0) {
                    $area = $side * $side;
                    echo "<h3>Area of Square: $area</h3>";
                } else {
                    echo "<h3>Please enter side for Square.</h3>";
                }
                break;

            case 'triangle':
                $base = $_POST['base'];
                $height = $_POST['height'];
                if ($base > 0 && $height > 0) {
                    $area = 0.5 * $base * $height;
                    echo "<h3>Area of Triangle: $area</h3>";
                } else {
                    echo "<h3>Please enter base and height for Triangle.</h3>";
                }
                break;

            default:
                echo "<h3>Please select a shape.</h3>";
        }
    }
    ?>
</body>
</html>
