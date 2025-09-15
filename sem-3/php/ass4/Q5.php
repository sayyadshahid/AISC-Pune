<?php
$a = 5;  

function myFunc() {
    $b = 10;  
    global $a;
    echo "Global a = $a<br>";
    echo "Local b = $b<br>";
}

myFunc();
?>
