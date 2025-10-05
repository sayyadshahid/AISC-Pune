<!-- Write PHP Script to check whether a specific word/substring exists in a string. -->

<?php
$str = "Hello World";
$word = "World";

if (strpos($str, $word) !== false) {
    echo "'$word' exists in '$str'";
} else {
    echo "'$word' does not exist in '$str'";
}
?>
