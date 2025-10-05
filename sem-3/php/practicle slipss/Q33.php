<!-- palidrom or not -->

<?php
$str = "madam";
$rev = "";
for ($i = strlen($str)-1; $i >= 0; $i--) {
    $rev .= $str[$i];
}

if ($str === $rev) {
    echo "$str is a palindrome";
} else {
    echo "$str is not a palindrome";
}
?>
