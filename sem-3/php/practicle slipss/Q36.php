<!-- Write a PHP program for local and global variable declaration. -->

<?php
$global = 100;

function demo() {
    global $global; // Access global variable inside function
    $local = 50; // Local variable
    echo "Inside function - Global: $global, Local: $local<br>";
}

demo();
echo "Outside function - Global: $global<br>";
?>
