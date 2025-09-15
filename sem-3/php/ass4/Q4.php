

<?php
$x = 10; 

function testScope() {
    $y = 20;  
    global $x;  
    echo "Global variable inside function: $x<br>";
    echo "Local variable inside function: $y<br>";
}

testScope();
echo "Global variable outside function: $x<br>";
 
?>
