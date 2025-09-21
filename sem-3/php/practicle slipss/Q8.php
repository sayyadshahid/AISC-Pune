<!-- 8) PHP program to display factorial number -->

<?php
$num = 5;
$fact = 1;

for ($i = 1; $i <= $num; $i++) {
    $fact *= $i;
}
echo "Factorial of $num is: $fact";
?>
