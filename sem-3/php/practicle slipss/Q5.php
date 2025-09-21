<!-- 5) PHP program to check reverse number -->

<?php
$n = 1234;
$rev = 0;
$og = $n;

while($n > 0){
    $digi = $n % 10;
    $rev = $rev * 10 + $digi;
    $n = (int)($n /10);
}

echo " $rev <br>";
echo " $og";

?>