<!-- 6) PHP program to check palindrome number -->

<?php
$num = 121;
$rev = 0;
$original = $num;

while ($num > 0) {
    $digit = $num % 10;
    $rev = $rev * 10 + $digit;
    $num = (int)($num / 10);
}

if ($original == $rev) {
    echo "$original is a Palindrome number.";
} else {
    echo "$original is NOT a Palindrome number.";
}
?>
