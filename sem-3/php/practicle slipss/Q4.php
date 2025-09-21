
<!-- 4) PHP program to display sum of digits -->
<?php

$num = 11;
$sum = 0;

while($num > 0){

    $digi = $num % 10;
    $sum += $digi;
    $num = (int)($num / 10);
}

echo "$sum";

?>