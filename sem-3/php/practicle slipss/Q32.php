<!-- Write a PHP script to accept string from user and display string in reverse order. (without using built in function) -->

<?php
$str = "hello";
$rev = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $rev .= $str[$i];
}

echo "Original: $str<br>";
echo "Reversed: $rev";
?>