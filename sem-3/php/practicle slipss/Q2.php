
<!-- 2) PHP program to find greater number among 4 numbers -->
<?php
$a = 20; $b = 50; $c = 15; $d = 40;

$max = $a;
if ($b > $max) $max = $b;
if ($c > $max) $max = $c;
if ($d > $max) $max = $d;

echo "Greatest number is: $max";
?>
