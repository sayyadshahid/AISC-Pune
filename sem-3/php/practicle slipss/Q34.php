<!-- Write a PHP program to apply all built-in- function over the string 
i)strtolower() ii)strtoupper() iii)Trim() iv)trim(), ltrim(), rtrim(), strlen(), strrev() -->

<?php
$str = "  Hello World  ";
echo "Original: '$str'<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Trimmed: '" . trim($str) . "'<br>";
echo "LTrim: '" . ltrim($str) . "'<br>";
echo "RTrim: '" . rtrim($str) . "'<br>";
echo "Length: " . strlen($str) . "<br>";
echo "Reversed: " . strrev($str) . "<br>";
?>