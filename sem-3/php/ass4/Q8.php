<?php
$str = "Welcome to PHP world";
$word = "PHP";

if (strpos($str, $word) !== false) {
    echo "'$word' found in string.";
} else {
    echo "'$word' not found in string.";
}
?>
