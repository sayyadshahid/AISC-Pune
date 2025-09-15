<!DOCTYPE html>
<html>
<body>
<form method="post">
    <input type="number" name="a" required> 
    <input type="number" name="b" required><br>

    <input type="radio" name="op" value="+"> +
    <input type="radio" name="op" value="-"> -
    <input type="radio" name="op" value="*"> *
    <input type="radio" name="op" value="/"> /
    <input type="radio" name="op" value="%"> %
    <br><input type="submit" name="submit" value="Calculate">
</form>

<?php
function calculate($a, $b, $op) {
    switch ($op) {
        case "+": return $a + $b;
        case "-": return $a - $b;
        case "*": return $a * $b;
        case "/": return $a / $b;
        case "%": return $a % $b;
    }
}

if (isset($_POST['submit'])) {

    
    echo "Result: " . calculate($_POST['a'], $_POST['b'], $_POST['op']);
}
?>
</body>
</html>
