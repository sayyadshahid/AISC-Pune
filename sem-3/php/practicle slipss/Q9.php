<!-- 9) PHP program to create simple calculator using switch -->

<?php
$a = 20;
$b = 10;
$operator = "+";   

switch ($operator) {
    case "+": echo "Result: " . ($a + $b); break;
    case "-": echo "Result: " . ($a - $b); break;
    case "*": echo "Result: " . ($a * $b); break;
    case "/": echo "Result: " . ($a / $b); break;
        
        break;
    default: echo "Invalid operator!";
}
?>
