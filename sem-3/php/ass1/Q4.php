<!-- some of digit -->

<?php

$number = readline("enter numbers");
$sum = 0;

while($number > 0){
    $digit = $number % 10;
    $sum += $digit;
    $number = (int) ($number / 10);
}

echo $sum
?>