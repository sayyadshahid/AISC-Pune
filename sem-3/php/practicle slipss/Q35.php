<!-- Write PHP program to illustrate concept of variable of scope in function -->

<?php
$globalVar = 10;  
function testScope() {
    $localVar = 5;  
    echo "Inside function: LocalVar = $localVar<br>";
    echo "Inside function: GlobalVar = " . $GLOBALS['globalVar'] . "<br>";
}

testScope();
echo "Outside function: GlobalVar = $globalVar<br>";
?>
