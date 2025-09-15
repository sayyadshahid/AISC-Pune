<!-- write a programe to find greater number among 4 numbers -->
<?php

$a = 2;
$b = 23;
$c = 24;
$d = 22;
 

$greatest = $a;

if ($b > $greatest) {
    $greatest = $b;
}

if ($c > $greatest) {
    $greatest = $c;
}

if ($d > $greatest) {
    $greatest = $d;
}
 
echo "The greatest number is: $greatest";

?>
