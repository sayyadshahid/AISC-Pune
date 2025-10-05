<!-- Write a PHP script for the following:  Design a form to accept two strings.
  Compare them using ($==, $===) operator.  Append second string at the end of first string. -->


<?php
$str1 = "Hello";
$str2 = "World";

// Compare using ==
if ($str1 == $str2) {
    echo "Comparison with == : Equal<br>";
} else {
    echo "Comparison with == : Not Equal<br>";
}

// Compare using ===
if ($str1 === $str2) {
    echo "Comparison with === : Equal<br>";
} else {
    echo "Comparison with === : Not Equal<br>";
}

// Append second string to first
$combined = $str1 . $str2;
echo "After appending: $combined";
?>
